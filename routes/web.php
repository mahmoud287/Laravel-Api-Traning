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
    return view('welcome');
});

//list blogs
Route::get('blogs', 'blogsController@index');

//list single blog
Route::get('blog/{id}', 'blogsController@show');

//create new blog
Route::post('blog', 'blogsController@store');

//update blog
Route::put('blog', 'blogsController@store');

//delete new blog
Route::delete('blog', 'blogsController@destroy');
