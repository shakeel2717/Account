<?php

use App\Http\Controllers\admin\BetController;
use App\Http\Controllers\admin\CommissionController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FinanceController;
use App\Http\Controllers\admin\TidController;
use App\Http\Controllers\admin\TransactionsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/admin/dashboard');

Route::prefix('admin/')->middleware('auth', 'admin', 'verified')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('finance', FinanceController::class);
    Route::get('tids/pending', [TidController::class, 'pending'])->name('tids.pending');
    Route::get('tids/approved', [TidController::class, 'approved'])->name('tids.approved');
    Route::get('bet/active', [BetController::class, 'active'])->name('bet.active');
    Route::get('bet/close', [BetController::class, 'close'])->name('bet.close');
    Route::get('transaction/all', [TransactionsController::class, 'all'])->name('transaction.all');
    Route::get('transaction/deposit', [TransactionsController::class, 'deposit'])->name('transaction.deposit');
    Route::get('transaction/withdraw', [TransactionsController::class, 'withdraw'])->name('transaction.withdraw');
    Route::get('commission/first', [CommissionController::class, 'first'])->name('commission.first');
    Route::get('commission/second', [CommissionController::class, 'second'])->name('commission.second');
    Route::get('commission/third', [CommissionController::class, 'third'])->name('commission.third');
});
