<?php

use App\Http\Controllers\CoinPaymentController;
use App\Http\Controllers\user\AllDepositController;
use App\Http\Controllers\user\BetTransactionController;
use App\Http\Controllers\user\CommissionController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\SecurityController;
use App\Http\Controllers\user\TeamController;
use App\Http\Controllers\user\TransactionController;
use App\Http\Controllers\user\WithdrawController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::prefix('user/')->middleware('auth', 'user', 'verified')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
