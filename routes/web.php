<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StarcastController;
use App\Http\Controllers\TheatreController;
use App\Http\Controllers\BooknowController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EmailController;



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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('Admin.login');
});



Route::view('signup' , 'User.signup');
Route::view('addmovie' , 'addmovie');
Route::view('addstarcast' , 'addstarcast');
Route::view('addtheatre' , 'addtheatre');
Route::view('moviedetails' , 'moviedetails');
Route::view('booknow' , 'booknow');
Route::view('addshow' , 'addshow');
Route::view('showtkt' , 'showticket');
Route::view('bookinglist' , 'bookinglist');


Route::post('/addmovie',[MovieController::class,'store']);
Route::get('/movielist',[MovieController::class,'show']);
Route::post('/admin' , [AdminController::class,'index']);
Route::get('/deletemovie/{m_id}',[MovieController::class,'destroy']);
Route::get('/editmovie/{m_id}',[MovieController::class,'edit']);
Route::post('/editmovie/{m_id}', [MovieController::class, 'update']);

//Route::post('/admin1',[MovieController::class,'index']);

Route::post('/register' ,[UserController::class , 'store'] );

Route::post('/addstarcast',[StarcastController::class,'store']);
Route::get('/starcastlist',[StarcastController::class,'show']);
Route::get('/delete/{id}',[StarcastController::class,'destroy']);
Route::get('/editstarcast/{id}',[StarcastController::class,'edit']);
Route::post('/editstarcast/{id}',[StarcastController::class,'update']);

Route::post('/addtheatre',[TheatreController::class,'store']);
Route::get('/theatrelist',[TheatreController::class,'show']);
Route::get('/deletetheatre/{id}',[TheatreController::class,'destroy']);
Route::get('/edittheatre/{id}',[TheatreController::class,'edit']);
Route::post('/edittheatre/{id}',[TheatreController::class,'update']);


Route::get('/showlist',[ShowController::class,'show']);
Route::get('/deleteshow/{id}',[ShowController::class,'destroy']);
Route::get('/editshow/{id}',[ShowController::class,'edit']);
Route::post('/editshow/{id}', [ShowController::class, 'update']);

Route::get('/home',[MovieController::class,'usershow']);

Route::get('/moviedetails/{m_id}',[MovieController::class,'moviedetails']);

Route::get('/logout',[AdminController::class,'logout']);

Route::get('/search/', [MovieController::class,'search'])->name('search');

Route::get('/movieidname/{id}',[MovieController::class,'movieidname']);

Route::get('/booknow/{id}',[BooknowController::class,'create']);

Route::post('bookticket',[BooknowController::class,'store']);

Route::get('/admindashboard',[MovieController::class,'admindash']);


Route::post('/addshow',[ShowController::class,'store']);
Route::get('/addshow',[TheatreController::class,'show2']);

Route::get('/booknow',[TheatreController::class,'show3']);


Route::get('movieidname/theatre/{id}',[ShowController::class,'showbyid']);

Route::get('/bookinglist',[BooknowController::class,'show']);

Route::get('/showticket',[BooknowController::class,'show2']);



