<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('floatingimages/position', [ImageController::class, 'setPositions']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'getHome']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'getAbout']);
Route::get('/music', [\App\Http\Controllers\MusicController::class, 'getMusic']);
Route::get('/albums', [\App\Http\Controllers\AlbumController::class, 'getAlbums']);
Route::get('/albums/{id}', [\App\Http\Controllers\AlbumController::class, 'getAlbum']);
