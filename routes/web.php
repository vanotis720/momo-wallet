<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::prefix('transactions')->group(function () {
        Route::get('/', [TransactionsController::class, 'getDepositForm'])->name('transactions.deposit');
        Route::post('/', [TransactionsController::class, 'initDeposit'])->name('transactions.deposit');
        Route::get('/{id}/status', [TransactionsController::class, 'getTransactionStatus'])->name('transactions.status');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
