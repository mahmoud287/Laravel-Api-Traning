<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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
Route::delete('blog/{id}', 'blogsController@destroy');
