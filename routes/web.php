<?php

use Illuminate\Support\Facades\Route;

/* Route::view('/', 'welcome'); */

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::view('profile', 'profile')->name('profile');
    Route::view('settings', 'settings')->name('settings');
    Route::view('profile-delete', 'profileDelete')->name('user.delete');	
});

require __DIR__.'/auth.php';
