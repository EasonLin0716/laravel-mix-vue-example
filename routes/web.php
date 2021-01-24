<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/friends', 'App\Http\Controllers\FriendController@index');

Route::get('/friends/create', 'App\Http\Controllers\FriendController@create');

Route::post('/friends', 'App\Http\Controllers\FriendController@store');

Route::get('/friends/{id}', 'App\Http\Controllers\FriendController@show');

Route::delete('/friends/{id}', 'App\Http\Controllers\FriendController@destroy');

Route::get('/helloworld2', function () {
    return view('helloworld2');
});