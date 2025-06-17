<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route otomatis (resource)
Route::apiResource('products', ProductController::class);

// Atau jika ingin manual, bisa seperti ini:
Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{product}', [ProductController::class, 'show']);
Route::put('products/{product}', [ProductController::class, 'update']);
Route::delete('products/{product}', [ProductController::class, 'destroy']);
