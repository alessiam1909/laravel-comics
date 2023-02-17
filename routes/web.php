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
})->name('home');

Route::get('/home/{title}', function($title){
    $fumetti = config('db.comics');
    
    foreach($fumetti as $fumetto){
        if($fumetto['title'] == $title){
            $single = $fumetto;
        }
    }

    $single = $fumetto;

    return view('details_fumetto', compact('single'));
})->name('details_fumetto');