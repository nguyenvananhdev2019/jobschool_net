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

Route::get('index.html', ['as' => 'index', 'uses' => 'baseController@actionHome']);
Route::get('login.html', ['as' => 'login', 'uses' => 'baseController@actionLogin']);
Route::post('login.html', ['as' => 'login', 'uses' => 'baseController@runLogin']);
Route::get('register.html', ['as' => 'register', 'uses' => 'baseController@actionRegister']);
Route::post('register.html', ['as' => 'register', 'uses' => 'baseController@runRegister']);
