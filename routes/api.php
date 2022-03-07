<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/logout',[AuthController::class,'logout']);
    Route::get('/data',[AuthController::class,'index']);
    Route::get('/data/{id}',[AuthController::class,'show']);
    Route::post('/data/{id}',[AuthController::class,'update']);
    Route::get('/delete/{id}', [AuthController::class, 'destroy']);
});
Route::post('/login', [AuthController::class,'login']);
Route::post('/register', [AuthController::class,'store']);