<?php

namespace App\Http\Controllers;

use App\Models\articel;
use App\Http\Requests\StorearticelRequest;
use App\Http\Requests\UpdatearticelRequest;

class ArticelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            "title" => "articel",
            "articel" => articel::all()
        ]
    );
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
     * @param  \App\Http\Requests\StorearticelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearticelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function show(articel $articel)
    {
        return view('articel',[
            "title" => "Single Post",
            "articel" => $articel
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function edit(articel $articel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearticelRequest  $request
     * @param  \App\Models\articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearticelRequest $request, articel $articel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function destroy(articel $articel)
    {
        //
    }
}
