<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate')->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('registerStore')->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('UserLevel');
Route::get('/stafDashboard', [DashboardController::class, 'stafindex'])->name('stafdashboard')->middleware('UserLevel');


Route::get('/tampilZoom', [ZoomController::class, 'index'])->name('zoomList')->middleware('UserLevel');
Route::get('/createZoom', [ZoomController::class, 'create'])->name('zoomCreate')->middleware('UserLevel');
Route::post('/insertZoom', [ZoomController::class, 'insert'])->name('zoomInsert')->middleware('UserLevel');
Route::get('/editZoom/{id}', [ZoomController::class, 'edit'])->name('zoomEdit')->middleware('UserLevel');
Route::post('/updateZoom/{id}', [ZoomController::class, 'update'])->name('zoomUpdate')->middleware('UserLevel');
Route::get('/deleteZoom/{id}', [ZoomController::class, 'delete'])->name('zoomDelete')->middleware('UserLevel');
