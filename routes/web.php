<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Artist
Route::get('/artists', [ArtistController::class, 'index'])->name('artist.index');

// Album
Route::get('/albums', [AlbumController::class, 'index'])->name('album.index');
Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('album.show');

Route::delete('/albums', [AlbumController::class, 'destroy'])->name('album.destroy');

// Song
Route::get('/songs', [SongController::class, 'index'])->name('song.index');
Route::get('/songs/{id}', [SongController::class, 'show'])->name('song.show');
