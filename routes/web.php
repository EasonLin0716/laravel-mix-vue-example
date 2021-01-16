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

Route::get('/helloworld', function () {
    $people = [
        ['name' => 'John', 'age' => '12', 'sex' => 'M'],
        ['name' => 'Jane', 'age' => '15', 'sex' => 'F'],
        ['name' => 'Joseph', 'age' => '19', 'sex' => 'M'],
    ];

    return view('helloworld', ['people' => $people, 'bookPage' => request('bookpage')]);
});

Route::get('/helloworld2', function () {
    return view('helloworld2');
});