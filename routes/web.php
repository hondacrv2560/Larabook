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
Route::post('topic/search','TopicController@search');
Route::resource ('topic','TopicController');
Route::resource ('block','BlockController');

Auth::routes();

Route::get('/home', 'HomeController@index');
