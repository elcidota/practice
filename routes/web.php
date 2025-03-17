<?php

use Illuminate\Support\Facades\Route;
    

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'App\Http\Controllers\MainController@index');
Route::get('/categories', 'App\Http\Controllers\CategoryController@index');
