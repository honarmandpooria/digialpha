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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// DIGI ALPHA REST API ROUTES
//
//
//  ====>
Route::get('/users', 'UserController@index');
Route::get('/users-with-posts', 'UserController@usersWithPosts');
Route::get('/users-with-posts', 'UserController@usersWithAlbums');



