<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        return view('home',[
            "kumpul_articel" => Artikel::all()
        ]);
    }

    public function show($slug){
        return view('artikel',
    [
        "articel" => Artikel::find($slug)
    ])
    ;
    }
}
