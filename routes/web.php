<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/tentang', [HomeController::class, 'about']);
// Route::get('/pembelajaran', [HomeController::class, 'learning']);
Route::get('/tenaga-kependidikan', [HomeController::class, 'content']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'home'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');

Route::fallback([ErrorController::class, 'index']);


