<?php

use App\Http\Controllers\admin\BetController;
use App\Http\Controllers\admin\CommissionController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DueController;
use App\Http\Controllers\admin\FinanceController;
use App\Http\Controllers\admin\SalaryController;
use App\Http\Controllers\admin\TidController;
use App\Http\Controllers\admin\TransactionsController;
use App\Http\Controllers\admin\WithdrawController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VisaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/admin/dashboard');

Route::prefix('admin/')->middleware('auth', 'admin', 'verified')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('transaction', TransactionController::class);
    Route::resource('salary', SalaryController::class);
    Route::resource('visa', VisaController::class);
    Route::post('due/loan', [DueController::class, 'loan'])->name('due.loan');
    Route::resource('due', DueController::class);
    Route::resource('invest', InvestController::class);
});
