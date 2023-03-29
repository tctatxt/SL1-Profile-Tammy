<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticelController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    $many_art = [
        [
            "title" => "Artikel Pertama",
            "slug"=> "artikel-pertama",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit, non incidunt omnis odit iusto perferendis. Fuga sunt esse natus nam optio excepturi, perspiciatis adipisci fugit quaerat consequatur. Ut maxime aliquam ipsa placeat?"
        ],
        [
            "title" => "Artikel kedua",
            "slug"=> "artikel-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit, non incidunt omnis odit iusto perferendis. Fuga sunt esse natus nam optio excepturi, perspiciatis adipisci fugit quaerat consequatur. Ut maxime aliquam ipsa placeat?"
        ],
        [
            "title" => "Artikel kedua",
            "slug"=> "artikel-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit, non incidunt omnis odit iusto perferendis. Fuga sunt esse natus nam optio excepturi, perspiciatis adipisci fugit quaerat consequatur. Ut maxime aliquam ipsa placeat?"
        ]
        ];
    return view('home', 
    [
        "image" => "logo.png",
        "articel"=> $many_art
    ])
    ;
});

Route::get('articel/{slug}', function(){
    $many_art = [
        [
            "title" => "Artikel Pertama",
            "slug"=> "artikel-pertama",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit, non incidunt omnis odit iusto perferendis. Fuga sunt esse natus nam optio excepturi, perspiciatis adipisci fugit quaerat consequatur. Ut maxime aliquam ipsa placeat?"
        ],
        [
            "title" => "Artikel kedua",
            "slug"=> "artikel-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit, non incidunt omnis odit iusto perferendis. Fuga sunt esse natus nam optio excepturi, perspiciatis adipisci fugit quaerat consequatur. Ut maxime aliquam ipsa placeat?"
        ],
        [
            "title" => "Artikel kedua",
            "slug"=> "artikel-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatem velit tempore quae ea asperiores sint fugit, non incidunt omnis odit iusto perferendis. Fuga sunt esse natus nam optio excepturi, perspiciatis adipisci fugit quaerat consequatur. Ut maxime aliquam ipsa placeat?"
        ]
        ];
        $new_ar=[];
        foreach($many_art as $ar){
            if($ar["slug"]===$slug){
                $new_ar = $ar;
            }
        };
    return view('articel',[
        "articel"=>$new_ar
    ]);
});
