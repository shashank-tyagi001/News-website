<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\testApiController;
use App\Http\Controllers\DummyApi;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:sanctum'], function(){
    // Route::post("login",[UserController::class,'index']);

    Route::get('listApi',[NewsController::class,'listApi']);
    Route::post('addApi',[NewsController::class,'storeContact']);
    Route::put('update',[testApiController::class,'update']);
    Route::delete('destroy/{id}',[testApiController::class,'destroy']);

    Route::get('search/{name}',[NewsController::class,'search']);
    Route::post("validate",[NewsController::class,'testData']);
});

Route::post("login",[UserController::class,'index']);
Route::get('businessGet',[DummyApi::class,'businessGet']);
Route::get('sportGet',[DummyApi::class,'sportGet']);
Route::get('technologyGet',[DummyApi::class,'technologyGet']);
Route::get('entertainmentGet',[DummyApi::class,'entertainmentGet']);
Route::get('latestNews',[DummyApi::class,'latestNews']);
Route::get('popularNews',[DummyApi::class,'popularNews']);
