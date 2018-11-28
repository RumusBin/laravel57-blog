<?php

namespace App\Http\Controllers;

use App\MainContent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MainContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $content = MainContent::all();
        return view('content.index', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vallidData = request()->validate([
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'regex:/(0)[0-9]{9}/'],
            'address' => ['required'],
            'copyright' => ['max:150']
        ]);
        MainContent::create($vallidData);
        return redirect('/main-content');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MainContent  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function show(MainContent $mainContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainContent  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function edit(MainContent $mainContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainContent  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainContent $mainContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainContent  $mainContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainContent $mainContent)
    {
        //
    }
}
