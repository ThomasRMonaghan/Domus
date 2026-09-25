<?php

use App\Http\Controllers\SplashController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SplashController::class, 'index'])->name('home');

Route::view('/about', 'splash', [
    'pageTitle' => 'About Us',
    'pageDescription' => 'Domus brings everyday household chores together in one place, helping households plan, organise and keep track of what needs doing.',
])->name('about');

Route::view('/contact', 'splash', [
    'pageTitle' => 'Contact Information',
    'pageDescription' => 'Looking to get in touch? Contact details for the Domus team will be published here when available.',
])->name('contact');

Route::view('/team', 'splash', [
    'pageTitle' => 'Meet the Team',
    'pageDescription' => 'Meet the people building Domus. Team introductions will be shared here soon.',
])->name('team');

Route::view('/pricing', 'splash', [
    'pageTitle' => 'Pricing',
    'pageDescription' => 'Plans and pricing for Domus have not been published yet. Check back here for details as they become available.',
])->name('pricing');
