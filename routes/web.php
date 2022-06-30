<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [MainController::class,'index'])->middleware('security');
Route::get('/bike', [MainController::class,'bikePage'])->middleware('security');
Route::get('/car', [MainController::class,'carPage'])->middleware('security');
Route::post('/order', [MainController::class,'orderPage'])->middleware('security');;


Route::get('/login',[LoginController::class,'index']);
Route::get('/logout',[LoginController::class,'doLogout']);
Route::post('/login',[LoginController::class,'doLogin']);

Route::post('/register',[RegisterController::class,'doRegister']);
Route::get('/register',[RegisterController::class,'index']);
