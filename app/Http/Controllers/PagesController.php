<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        $content = [];
        $lastPosts = Post::orderBy('created_at', 'desc')->with('category')->limit(6)->get();

        return view('pages.main', compact('lastPosts'));
    }

    public function advertising()
    {

        return view('pages.advertising');

    }

    public function about()
    {
        return view('pages.about');
    }


    public function contacts()
    {
        return view('pages.contacts');
    }
}
