<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->name('create_product');
Route::post('/products/store', [ProductController::class, 'store'])->name('store_product');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('delete_product');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('edit_product');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('update_product');
Route::get('search', [ProductController::class, 'search'])->name('search_product');