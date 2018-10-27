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

// Note, we are using Route Caching in Production, so don't use Closures in these route files
// https://laravel.com/docs/5.7/controllers#route-caching

Route::get('/user', 'GeneralApiController@getUser');
