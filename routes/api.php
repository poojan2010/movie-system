<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\movieController;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get('/movies',[movieController::class,'index']);
Route::post('/addmovies',[movieController::class,'store']);
Route::post('/editmovie/{m_id}', [movieController::class, 'update']);
Route::get('/deletemovie/{m_id}',[movieController::class,'destroy']);
