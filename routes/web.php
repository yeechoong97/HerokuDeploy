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
Route::post('index/store','MainController@create');
Route::put('index/close','MainController@close');

Route::get('order','OrderController@show')->name("order-show");
Route::get('order/fetch','OrderController@fetch');

Route::get('fund','FundController@index')->name("fund-index");
Route::put('fund/update','FundController@update')->name("fund-update");
Route::get('fund/withdraw','FundController@withdraw_index')->name("fund-withdraw");
Route::put('fund/withdraw','FundController@withdraw_update')->name("withdraw-update");
Route::get('fund/deposit','FundController@deposit_index')->name("fund-deposit");
Route::put('fund/deposit','FundController@deposit_update')->name("deposit-update");

Route::get('learning','LearningController@index')->name("learning-index");


Route::get('index/testing',function(){
    return View::make("trade.testing")
        ->render();
});


Auth::routes();

