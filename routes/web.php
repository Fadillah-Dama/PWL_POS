<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
// Jobsheet 3
use App\Http\Controllers\LevelController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'food']);
    Route::get('/beauty-health', [ProductController::class, 'beauty']);
    Route::get('/home-care', [ProductController::class, 'home']);
    Route::get('/baby-kid', [ProductController::class, 'baby']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

Route::get('/penjualan', [PenjualanController::class, 'index']);

// Jobsheet 3
Route::get('/', function() {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);