<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PolicyController;
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
Route::get('/dashboard/login', [AuthController::class, 'view'])->name('dashboard.login');
Route::get('/links', [LinkController::class, 'view'])->name('links');
Route::get('/policy', [PolicyController::class, 'view'])->name('policy');
Route::fallback(fn () => view('404'));

Route::post('/dashboard/login/send', [AuthController::class, 'login'])->name('dashboard.login.send');

Route::middleware('auth')->prefix('dashboard')->group(function(): void {
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard.home');

    Route::post('/save', [HomeController::class, 'dashboardSave'])->name('dashboard.save');

    Route::get('images', [ImageController::class, 'dashboard'])->name('dashboard.images');
    Route::get('images/newimage', [ImageController::class, 'newPage'])->name('dashboard.imagenew');
    Route::get('images/{id}', [ImageController::class, 'detail'])->name('dashboard.imagedetail');

    Route::post('image/delete', [ImageController::class, 'delete'])->name('image.delete');
    Route::post('image/save', [ImageController::class, 'save'])->name('image.save');
    Route::post('image/create', [ImageController::class, 'create'])->name('image.create');

    Route::get('music', [MusicController::class, 'dashboard'])->name('dashboard.music');
    Route::get('music/newmusic', [MusicController::class, 'newPage'])->name('dashboard.musicnew');
    Route::get('music/{id}', [MusicController::class, 'detail'])->name('dashboard.musicdetail');

    Route::post('music/delete', [MusicController::class, 'delete'])->name('music.delete');
    Route::post('music/save', [MusicController::class, 'save'])->name('music.save');
    Route::post('music/create', [MusicController::class, 'create'])->name('music.create');

    Route::get('about', [AboutController::class, 'dashboard'])->name('dashboard.about');

    Route::post('about/save', [AboutController::class, 'save'])->name('about.save');

    Route::get('albums', [AlbumController::class, 'dashboard'])->name('dashboard.albums');
    Route::get('albums/newalbum', [AlbumController::class, 'newPage'])->name('dashboard.albumnew');
    Route::get('albums/{id}', [AlbumController::class, 'detail'])->name('dashboard.albumdetail');

    Route::post('/album/delete', [AlbumController::class, 'delete'])->name('album.delete');
    Route::post('/album/save', [AlbumController::class, 'save'])->name('album.save');
    Route::post('/album/create', [AlbumController::class, 'create'])->name('album.create');

    Route::get('artists', [ArtistController::class, 'dashboard'])->name('dashboard.artists');
    Route::get('artists/newartist', [ArtistController::class, 'newArtist'])->name('dashboard.artistnew');
    Route::get('artists/{id}', [ArtistController::class, 'detail'])->name('dashboard.artistdetail');

    Route::post('/artist/delete', [ArtistController::class, 'delete'])->name('artist.delete');
    Route::post('/artist/save', [ArtistController::class, 'save'])->name('artist.save');
    Route::post('/artist/create', [ArtistController::class, 'create'])->name('artist.create');
});
