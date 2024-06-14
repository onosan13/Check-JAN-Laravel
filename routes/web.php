<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckUserController;

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

//ログイン
Route::get('/login/index', [AuthController::class, 'index'])->name('front.index');
Route::post('/login', [AuthController::class, 'login']);

//会員登録
Route::get('/register', [AuthController::class, 'register']);
Route::post('/user/register', [UserController::class, 'user']);

Route::get('/', [CheckController::class, 'input']);
Route::prefix('/check')->group(function(){
  Route::post('/confirm', [CheckController::class, 'confirm'])->name('cehck.list');
  Route::post('/result', [CheckController::class, 'result']);
});

//認可処理
Route::middleware(['auth'])->group(function () {
  Route::prefix('/user')->group(function(){
    Route::get('/input', [CheckUserController::class, 'input']);
    Route::post('/confirm', [CheckUserController::class, 'confirm'])->name('cehck.list');
    Route::post('/result', [CheckUserController::class, 'result']);
    Route::put('/register', [CheckUserController::class, 'register']);
  });
  Route::get('/logout', [AuthController::class, 'logout']);
});

