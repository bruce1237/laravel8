<?php

use App\Http\Controllers\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// with global constrict, please go to RouteServiceProvider.php
Route::get('/users/{name?}', function ($name = null) {
    return 'Hi User: ' . $name;
});
Route::get('/products/{id?}', function ($id = null) {
    return 'Product ID: ' . $id;
});

// local constrict
Route::get('/users/{name?}', function ($name = null) {
    return 'Hi User: ' . $name;
})->where('name', '[a-zA-Z]+');


Route::get('/products/{id?}', function ($id = null) {
    return 'Product ID: ' . $id;
})->where('id', '[0-9]+');

//Match
Route::match(['get', 'post'], '/mathch', function (Request $request) {
    return 'Requested method is '. $request->method();
});

//any
Route::any('/any', function (Request $request) {
    return 'Requested method is ' . $request->method();
});

Route::POST('/request',[UserController::class,'request']);
