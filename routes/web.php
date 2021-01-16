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
    $people = ['name1' => 'John', 'age1' => '12', 'sex1' => 'M', 'name2' => 'Jane', 'age2' => '15', 'sex2' => 'F'];
    return view('helloworld', $people); // ['key' => 'value', ...]
});