<?php

use App\Http\Controllers\Admin\PurchaseInvoices\PurchaseInvoicesController;
use App\Http\Controllers\Admin\Invoices\InvoicesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Accounting Vouchers
    Route::get('/invoice', [InvoicesController::class, 'index'])->name('invoices.list');
    Route::get('/datatable', [ InvoicesController::class,'datatable'])->name('sales-vouchers.datatable');
    Route::get('/invoice/{id}', [ InvoicesController::class,'view'])->name('invoices.show');
    Route::get('/invoice/{id}/edit', [ InvoicesController::class,'edit'])->name('invoices.edit');
    Route::delete('/invoice/{id}', [ InvoicesController::class,'destroy'])->name('invoices.destroy');

    Route::get('/purchase-invoice', [PurchaseInvoicesController::class, 'index'])->name('purchase.invoices.list');
});

require __DIR__.'/auth.php';
