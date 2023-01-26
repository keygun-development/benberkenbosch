<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
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

Route::get('/', [HomeController::class, 'view'])->name('welcome');
Route::get('/albums/{id}', [AlbumController::class, 'view'])->name('albums.detail');
Route::get('/music', [MusicController::class, 'view'])->name('music');
Route::get('/about', [AboutController::class, 'view'])->name('about');
Route::get('/contact', [ContactController::class, 'view'])->name('contact');
Route::get('/dashboard/login', [AuthController::class, 'view'])->name('dashboard.login');
