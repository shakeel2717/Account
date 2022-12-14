<?php

use App\Http\Controllers\CoinPaymentController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\user\AllDepositController;
use App\Http\Controllers\user\BetTransactionController;
use App\Http\Controllers\user\CommissionController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\ReferController;
use App\Http\Controllers\user\SecurityController;
use App\Http\Controllers\user\TeamController;
use App\Http\Controllers\user\WithdrawController;
use Illuminate\Support\Facades\Route;

Route::resource('/', LandingPageController::class);

Route::prefix('user/')->middleware('auth', 'user', 'verified')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('refer', ReferController::class);
    Route::get('withdraw/all', [WithdrawController::class, 'all'])->name('withdraw.all');
    Route::resource('withdraw', WithdrawController::class);
    Route::post('deposit/tid', [DepositController::class, 'tid'])->name('deposit.tid');
    Route::get('deposit/all', [DepositController::class, 'all'])->name('deposit.all');
    Route::resource('deposit', DepositController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('security', SecurityController::class);
    Route::resource('team', TeamController::class);
    Route::get('bet/all', [BetTransactionController::class, 'all'])->name('bet.all');
    Route::get('bet/profit', [BetTransactionController::class, 'profit'])->name('bet.profit');
    Route::get('commission/first', [CommissionController::class, 'first'])->name('commission.first');
    Route::get('commission/second', [CommissionController::class, 'second'])->name('commission.second');
    Route::get('commission/third', [CommissionController::class, 'third'])->name('commission.third');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';


Route::prefix('payment')->group(function () {
    Route::post('/webhook', [CoinPaymentController::class, 'webhook'])->name('webhook');
});
