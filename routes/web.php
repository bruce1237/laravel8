<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HTTPClientController;
use App\Http\Controllers\LmsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\PaymentGateway\Payment;
use App\PaymentGateway\PaymentFacade;
use Illuminate\Support\Facades\App;
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

Route::any('/user', [UserController::class, 'index']);

Route::get('/HttpClient', [HTTPClientController::class, 'getAllPost']);
Route::get('/HttpClient/{id?}', [HTTPClientController::class, 'getPost']);
Route::get('/HttpClient/addPost', [HTTPClientController::class, 'addPost']);
Route::get('/HttpClient/updatePost/{id}', [HTTPClientController::class, 'updatePost']);
Route::get('/HttpClient/delPost/{id}', [HTTPClientController::class, 'delPost']);

// Fluent Strings
Route::get('/Fluent', [FluentController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('myRouteMiddleware');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/session/set', [SessionController::class, 'storeSeesionData']);
Route::get('/session/unset', [SessionController::class, 'delSessionData']);
Route::get('/session/get', [SessionController::class, 'getSessionData']);

//Database
Route::get('/database/insert', [DatabaseController::class, 'addData']);
Route::get('/database/getAll', 'App\Http\Controllers\DatabaseController@getAllData');
Route::get('/database/{id?}', 'App\Http\Controllers\DatabaseController@getDataByID');
Route::get('/database/del/{name}', [DatabaseController::class, 'delPost']);
Route::get('/database/update/{id?}', [DatabaseController::class, 'updatePost']);
Route::get('/database/innerJoin', [DatabaseController::class, 'innerJoinTable']);
Route::get('/database/leftJoin', [DatabaseController::class, 'leftJoinTable']);
Route::get('/database/rightJoin', [DatabaseController::class, 'rightJoinTable']);
Route::get('/database/model', [DatabaseController::class, 'getDataByModel']);
Route::get('/variables', function () {
    return view('variables');
});



Route::prefix('blade')->group(function(){
    Route::get('', function () {
        return view('layouts.index');
    });
    
    Route::get('about', function () {
        return view('layouts.about');
    });
    
    Route::get('contact', function () {
        return view('layouts.contact');
    });

});


Route::get('myPosts',[PaginationController::class,'index']);
Route::get('/upload',[UploadController::class,'index']);
Route::post('/upload',[UploadController::class,'upload']);

Route::get('/local/{locale}',function($locale){
    App::setlocale($locale);
    return view('layouts.index');
});

Route::get('myPosts/addPost',[PostController::class,'addPost']);
Route::get('myPosts/addComment/{id}',[PostController::class,'addComment']);
Route::get('myPosts/getComment/{id}',[PostController::class,'getCommentsByPosts']);
Route::get('phone',[PhoneController::class,'allUserWithPhone']);
Route::get('phone/insert',[PhoneController::class,'insertPhone']);
Route::get('phone/{id}',[PhoneController::class,'getPhoneByUserID']);

Route::get('role/new',[RoleController::class,'addRole']);
Route::get('role/user/new',[RoleController::class,'addUserWithRoles']);
Route::get('role/user/{id}',[RoleController::class,'getAllRolesByUsers']);
Route::get('role/{id}',[RoleController::class,'getAllUsersByRole']);

Route::get('email/send',[MailController::class,'sendEmail']);







