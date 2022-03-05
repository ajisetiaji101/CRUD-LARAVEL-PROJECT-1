<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);

Route::get('/register', [HomeController::class, 'register']);
Route::post('/register', [HomeController::class, 'store']);

Route::get('/login', [AdminController::class, 'login']);
Route::post('/login', [AdminController::class, 'authenticate'])->name('login')->middleware('guest');
Route::group(['middleware' => ['auth','ceklevel:admin,employee']], function() {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/logout', [AdminController::class, 'logout']);
    Route::get('/info', [AdminController::class, 'info']);
    Route::get('/data', [AdminController::class, 'data']);
    Route::get('/data/{id}', [AdminController::class, 'delete']);
    Route::get('/data/{id}/edit', [AdminController::class, 'edit']);
    Route::put('/data/edit/{id}', [AdminController::class, 'update']);
});

