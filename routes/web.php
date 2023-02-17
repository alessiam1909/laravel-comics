<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $fumetti = config('db.comics');
    return view('home', compact('fumetti'));
});


Route::get('/header', function(){
    $nav =  [
        [
            "label" =>'CHARACTERS',
            "url"=> '#',
            "active"=> false

        ],
        [
            "label" =>'COMICS',
            "url"=> '#',
            "active"=> true

        ],
        [
            "label" =>'MOVIES',
            "url"=> '#',
            "active"=> false

        ],
        [
            "label" =>'TV',
            "url"=> '#',
            "active"=> false

        ],
        [
            "label" =>'GAMES',
            "url"=> '#',
            "active"=> false

        ],
        [
            "label" =>'COLLECTIBLES',
            "url"=> '#',
            "active"=> false

        ],
        [
            "label" =>'VIDEOS',
            "url"=> '#',
            "active"=> false

        ],
        [
            "label" =>'FANS',
            "url"=> '#',
            "active"=> false

        ],
        [
            "label" =>'NEWS',
            "url"=> '#',
            "active"=> false

        ],
        [
            "label" =>'SHOP',
            "url"=> '#',
            "active"=> false

        ]
        ];
        return view('header', compact('nav'));
});
