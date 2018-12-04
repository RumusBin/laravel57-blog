<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StorePost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
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
        $post->image = $fileName;
        $post->save();
//        Post::create($request->validated());
//
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
        return view('post.edit', compact('post', 'categories'));
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
