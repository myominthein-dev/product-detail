<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products/1', [ProductController::class,'show'])->name('product.show');
Route::get('/products', [ProductController::class,'index'])->name('product.index');
