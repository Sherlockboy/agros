<?php

use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/fms', [PagesController::class, 'fms'])->name('fms');
Route::prefix('marketplace')->name('marketplace.')->group(function () {
    Route::get('/goods', [MarketplaceController::class, 'primary'])->name('primary');
    Route::get('/nutrition', [MarketplaceController::class, 'secondary'])->name('secondary');
    Route::get('/product', [MarketplaceController::class, 'product'])->name('product');
    Route::get('/order', [MarketplaceController::class, 'order'])->name('order');
});