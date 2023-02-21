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
    $nav_menu = config('db.nav');
    $icons  =config('db.social_icons');
    return view('home', compact('fumetti', 'nav_menu', 'icons'));
})->name('home');

Route::get('/home/{id}', function($id){
    $fumetti = config('db.comics');
    $icons  =config('db.social_icons');
    $nav_menu = config('db.nav');
    $single= '';
    foreach($fumetti as $key => $fumetto){
        if($key == $id){
            $single = $fumetto;
        }
    }


    return view('details_fumetto', compact('single', "icons", "nav_menu"));
})->name('details_fumetto');