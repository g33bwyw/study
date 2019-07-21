<?php

//use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', '\App\Http\Controllers\Api\LoginController@login');
Route::post('register', '\App\Http\Controllers\Api\RegisterController@register');
Route::middleware('auth:api')
    ->get('/user', function (Request $request) {
        return 123;
    });
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/index', '\App\Http\Controllers\IndexController@index');
});

