<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\chirpController;

Route::get('/', [App\Http\Controllers\chirpController::class, 'index'])->name('home');
