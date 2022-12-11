<?php

use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\SecurityController;
use App\Http\Controllers\user\TeamController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::prefix('user/')->middleware('auth', 'user', 'verified')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::post('deposit/tid', [DepositController::class,'tid'])->name('deposit.tid');
    Route::resource('deposit', DepositController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('security', SecurityController::class);
    Route::resource('team', TeamController::class);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
