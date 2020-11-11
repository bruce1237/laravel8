<?php

use App\Http\Controllers\LmsController;
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

Route::get('/',[LmsController::class,'index']);
Route::get('index',[LmsController::class,'index']);
Route::get('aboutus',[LmsController::class,'aboutus']);
Route::get('contactus',[LmsController::class,'contactus']);
