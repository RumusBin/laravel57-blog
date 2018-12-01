<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMainInfo;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = DB::table('infos')->latest()->first();
//        return view('info.index', compact('info'));
        return view('info.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info.create');
    }

    /**
     * Store a newly created resource in storage.
     * @var StoreMainInfo
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMainInfo $request)
    {
        Info::create($request->validated());
        return redirect('/info');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit( Info $info)
    {
        return view('info.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreMainInfo  $request
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMainInfo $request, Info $info)
    {
        $info->update($request->validated());
        return redirect('/info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        try {
            $info->delete();
        } catch (\Exception $exception) {
            return new Response($exception->getMessage(), 400);
        }
        return redirect('/info');
    }
}
