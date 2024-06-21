<?php

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/download', [App\Http\Controllers\DownloadController::class, 'index'])->name('download');
Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'index'])->name('home');
Route::get('/lessons/{id}', [App\Http\Controllers\LessonsController::class, 'index'])->name('home');
