<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HTTPClientController;
use App\Http\Controllers\LmsController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LmsController::class, 'index']);
Route::get('index', [LmsController::class, 'index']);
Route::get('aboutus', [LmsController::class, 'aboutus']);
Route::get('contactus', [LmsController::class, 'contactus']);

//without routerName
// Route::get('/home', [HomeController::class, 'index']);

//with routerName
// Route::get('/home', [HomeController::class, 'index'])->name('home.index');

//with params
Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::any('/user',[UserController::class,'index']);

Route::get('/HttpClient',[HTTPClientController::class,'getAllPost']);
Route::get('/HttpClient/{id?}',[HTTPClientController::class,'getPost']);
Route::get('/HttpClient/addPost',[HTTPClientController::class,'addPost']);
Route::get('/HttpClient/updatePost/{id}',[HTTPClientController::class,'updatePost']);
Route::get('/HttpClient/delPost/{id}',[HTTPClientController::class,'delPost']);