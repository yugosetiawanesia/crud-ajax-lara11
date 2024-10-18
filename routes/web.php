<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Arahkan ke index post saat pertama kali aplikasi diakses
Route::get('/', [PostController::class, 'index']);

/**
 * route resource posts
 */
Route::resource('/posts', PostController::class);
