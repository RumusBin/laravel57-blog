<?php

namespace App\Http\Controllers;

use App\Info;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        $content = [];
        $content['last_posts'] = Post::orderBy('created_at', 'desc')->limit(6)->get();
        $content['info'] = Info::all();

        return view('pages.main', compact('content'));
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
