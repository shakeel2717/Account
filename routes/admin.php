<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\TidController;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/admin/dashboard');

Route::prefix('admin/')->middleware('auth', 'admin', 'verified')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('tids', TidController::class);
});
