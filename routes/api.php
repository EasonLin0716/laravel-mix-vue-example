<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/curltest', function() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/todos/1');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = json_decode(curl_exec($ch));
    $key = 'title';
    $outputTitle = $output->$key;
    $secret = env('MIX_CUSTOM_SCRECT');
    curl_close($ch);
    return response()->json([
        'data' => $output,
        'status' => '000',
        'msg' => $secret
    ]);
});