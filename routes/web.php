<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SplashController; 

Route::get('/', [SplashController::class, 'index'])->name('home');
