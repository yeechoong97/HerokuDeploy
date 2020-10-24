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

// Route::get('index','MainController@getOANDA')->name("index");
// Route::post('/index/api','MainController@getCandle');
// Route::post('index/instrument','MainController@getCandleStick');

Route::get('index','MainController@index')->name("index");

Auth::routes();

