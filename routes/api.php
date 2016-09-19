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

Route::group(['namespace' => 'Api'], function() {
    Route::post('login', 'AuthController@authenticate');
    Route::get('me', 'AuthController@getAuthenticatedUser');
});


Route::group(['prefix' => 'v1','namespace' => 'Api\v1','middleware' => 'jwt.auth'], function() {
    Route::resource('user', 'UserController');
});

