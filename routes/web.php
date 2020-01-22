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

Auth::routes();
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders', function (Request $request) {
    // Access token has both "check-status" and "place-orders" scopes...
})->middleware('scopes:check-status,place-orders,client');


Route::get('/user', function () {
    //
})->middleware('auth:api');