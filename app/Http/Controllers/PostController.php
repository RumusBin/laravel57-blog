<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\PostCreated;
use App\Http\Requests\StorePost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('id','DESC')->paginate(5);
        return view('admin.content.posts.index', compact('posts'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.content.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        if ($request->hasFile('postImage')) {
            $file = $request->file('postImage');
            $request->validated();
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
        } else {
            $fileName = 'no_image.png';
        }
        $post = new Post;
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->date = $request['date'];
        if ($request['category_id']) {
            $post->category_id = $request['category_id'];
        }
        $post->user_id = Auth::user()->id;
        $post->postImage = $fileName;
        $post->save();

        event(new PostCreated($post));

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.content.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StorePost $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, Post $post)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            if ($post->image !== 'no_image.png') {
                Storage::delete(public_path('/images/') . $post->image);
            }
        } else {
            $fileName = $post->image;
        }
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->date = $request['date'];
        if ($request['category_id']) {
            $post->category_id = $request['category_id'];
        }
        $post->image = $fileName;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
        } catch (\Exception $exception) {
            return new Response($exception->getMessage(), 400);
        }

        return redirect()->route('posts.index');
    }
}
