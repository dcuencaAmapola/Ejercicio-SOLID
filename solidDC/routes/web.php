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
    return view('welcome');
});

Route::post('posts', 'PostController@store')->name('posts.store');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');
Route::get('posts', 'PostController@index')->name('posts.index');
