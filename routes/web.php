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

// Note, we are using Route Caching in Production, so don't use Closures in these route files
// https://laravel.com/docs/5.7/controllers#route-caching

// General Routes

Route::get('/', 'StaticPageController@getIndex');
Route::post('/subscribe-email', 'StaticPageController@postSubscribeEmail');
Route::get('/confirm-subscribed', 'StaticPageController@getConfirmSubscribed');

// User routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
