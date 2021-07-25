<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'index'])->name('page.index');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
