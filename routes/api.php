<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::get('/post', 'PostController@all');
Route::get('/post/{post_id}', 'PostController@single');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    Route::get('/logout', 'AuthController@logout');
    Route::post('/createPost', 'PostController@create');
    Route::post('/createComment', 'CommentController@create');
});
