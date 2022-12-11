<?php

use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\SecurityController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::prefix('user/')->middleware('auth', 'user', 'verified')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('security', SecurityController::class);
});

require __DIR__ . '/auth.php';
