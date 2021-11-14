<?php

use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/fms', [PagesController::class, 'fms'])->name('fms');
Route::get('/tech-renting', [PagesController::class, 'techRenting'])->name('tech-renting');

Route::prefix('marketplace')->name('marketplace.')->group(function () {
    Route::get('/goods', [MarketplaceController::class, 'primary'])->name('primary');
    Route::get('/nutrition', [MarketplaceController::class, 'secondary'])->name('secondary');
    Route::get('/product', [MarketplaceController::class, 'product'])->name('product');
    Route::get('/order', [MarketplaceController::class, 'order'])->name('order');
});

Route::prefix('investment')->name('investment.')->group(function () {
    Route::get('/', [InvestmentController::class, 'index'])->name('index');
    Route::get('/show', [InvestmentController::class, 'show'])->name('show');
});