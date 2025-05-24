<?php

use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);

Route::patch('/orders/complete/{order}', [OrderController::class, 'complete'],)->name('orders.complete');
