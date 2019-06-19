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

Route::get('/static', 'GithubController@index');
Route::get('/laravel', 'GithubController@laravel');
Route::get('/tailwind', 'GithubController@tailwind');
Route::get('/gardening', 'GithubController@gardening');
Route::get('/london', 'GithubController@london');

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home2', 'HomeController@index')->name('home2');

Route::get('/map', 'MapController@index')->name('map');

Route::view('/twitter', 'tailwind_twitter');
