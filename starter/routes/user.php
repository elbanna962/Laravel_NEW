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
    return view('login');
})->name('home');


Route::group(['prefix'=>'User'],function(){
    Route::get('register','User\SignupController@showview')-> name('register');
    Route::post('login','User\SignupController@store')-> name('login');

});

Route::group(['prefix'=>'User'],function(){
    Route::get('logintest','User\LoginController@showview')-> name('register');

    Route::post('test','User\LoginController@check')-> name('test');

});


