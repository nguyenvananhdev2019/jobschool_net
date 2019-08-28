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


Route::group(['prefix' => 'common'], function() {
	Route::get('get-address-huyen-by-tinh.html', ['as' => 'api_gethuyen', 'uses' => 'API\commonController@getAddressHuyenToTinh']);
	Route::get('get-address-xa-by-huyen.html', ['as' => 'api_getxa', 'uses' => 'API\commonController@getAddressXaByHuyen']);
	Route::get('get-address-tinh.html', ['as' => 'api_gettinh', 'uses' => 'API\commonController@getAddressTinh']);
});