<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        return view('welcome');
    }

    public function advertising()
    {

        return view('advertising');

    }

    public function about()
    {
        return view('about');
    }


    public function contacts()
    {
        return view('contacts');
    }
}
