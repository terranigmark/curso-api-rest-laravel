<?php

use Illuminate\Support\Facades\Route;

// Acceso Web

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
