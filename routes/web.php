<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;


Route::get('/home',[ArtikelController::class,'index'] );

Route::get('artikel',function(){
    return view('artikel');
});

Route::get('artikel/{slug}', [ArtikelController::class,'show']);


