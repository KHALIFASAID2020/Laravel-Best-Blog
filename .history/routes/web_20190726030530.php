<?php

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
    //dd('chech the name of the function');
    return "<h1>Welecome to laravel</h1>";
    //return view('welcome');
});

Route::get('/about', function () {
    //dd('chech the name of the function');
    return view('pages.about');
    //return view('welcome');
});

Route::get('/services', function () {
    //dd('chech the name of the function');
    return view('pages.serices');
    //return view('welcome');
});
