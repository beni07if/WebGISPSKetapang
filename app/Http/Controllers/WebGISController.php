<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebGISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('WebGIS.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function blog()
    {
        return view('WebGIS.blog');
    }
    public function peta()
    {
        return view('WebGIS.peta');
    }

    public function petaJs()
    {
        return view('WebGIS.petaJs');
    }

    public function peta2()
    {
        return view('WebGIS.peta2');
    }

    public function peta3()
    {
        return view('WebGIS.peta3');
    }
    public function tentang()
    {
        return view('WebGIS.tentang');
    }
    public function SkPs()
    {
        return view('WebGIS.skps');
    }
    public function galery()
    {
        return view('WebGIS.galery');
    }
}
