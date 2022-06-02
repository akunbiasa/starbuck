<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\menusController;
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

Route::get('/index', [SiteController::class,'index'])->name('site.index');

Route::get('/home', [SiteController::class,'home']);

Route::get('/menu', [SiteController::class,'menu']);

Route::get('/dessert', [SiteController::class,'dessert']);
Route::get('/drink', [SiteController::class,'drink']);
Route::get('/meals', [SiteController::class,'meals']);

Route::get('/location', [SiteController::class,'location']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/menus', [MenusController::class,'index']);


