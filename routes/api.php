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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/user', \App\Http\Controllers\API\v1\User\IndexController::class);
Route::get('/user/{user}', \App\Http\Controllers\API\v1\User\ShowController::class);
Route::patch('/user/{user}', \App\Http\Controllers\API\v1\User\UpdateController::class);
Route::post('/user', \App\Http\Controllers\API\v1\User\StoreController::class);
Route::post('/user/verify', \App\Http\Controllers\API\v1\User\VerifyEmailController::class);

Route::get('/holiday', \App\Http\Controllers\API\v1\Holiday\IndexController::class);
Route::get('/holiday/{holiday}', \App\Http\Controllers\API\v1\Holiday\ShowController::class);
Route::post('/holiday', \App\Http\Controllers\API\v1\Holiday\StoreController::class);

Route::get('/koran', \App\Http\Controllers\API\v1\Koran\IndexController::class);
Route::get('/koran/{koran}', \App\Http\Controllers\API\v1\Koran\ShowController::class);
Route::post('/koran', \App\Http\Controllers\API\v1\Koran\StoreController::class);

Route::get('/zikr', \App\Http\Controllers\API\v1\Zikr\IndexController::class);
Route::get('/zikr/{zikr}', \App\Http\Controllers\API\v1\Zikr\ShowController::class);
Route::post('/zikr', \App\Http\Controllers\API\v1\Zikr\StoreController::class);

Route::get('/news', \App\Http\Controllers\API\v1\News\IndexController::class);
Route::get('/news/{news}', \App\Http\Controllers\API\v1\News\ShowController::class);
Route::post('/news', \App\Http\Controllers\API\v1\News\StoreController::class);

Route::get('/namaz', \App\Http\Controllers\API\v1\Namaz\IndexController::class);
Route::get('/namaz/{namaz}', \App\Http\Controllers\API\v1\Namaz\ShowController::class);
Route::post('/namaz', \App\Http\Controllers\API\v1\Namaz\StoreController::class);

Route::get('/support', \App\Http\Controllers\API\v1\Support\IndexController::class);
Route::get('/support/{support}', \App\Http\Controllers\API\v1\Support\ShowController::class);
Route::post('/support', \App\Http\Controllers\API\v1\Support\StoreController::class);