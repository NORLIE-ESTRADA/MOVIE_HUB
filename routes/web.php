<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/search={query}', [MoviesController::class, 'search'])->name('movies.search');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');
