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
Route::get('admin', function () {
    return view('admin.index');
});

Route::get('/', function () {
    return view('templates.index');
});


Route::get('article', function () {
    return view('templates.article');
});


Route::get('category', function () {
    return view('templates.category');
});


