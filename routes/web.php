<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\BookmarkController;


Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/search={query}', [MoviesController::class, 'search'])->name('movies.search');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/register', [RegistrationController::class, 'create']);
Route::post('register', [RegistrationController::class, 'store']);

Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/logout',  [SessionsController::class, 'destroy']);

Route::get('/bookmark', [BookmarkController::class, 'create']);
Route::post('bookmark', [BookmarkController::class, 'store']);
Route::get('/profile/{userID}', [BookmarkController::class, 'show']);