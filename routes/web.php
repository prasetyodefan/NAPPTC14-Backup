<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;

// Public Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category');
Route::get('/region/{region}', [HomeController::class, 'region'])->name('region');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');

    // Resource routes for categories
    // Route::get('/categories', [AdminController::class, 'manageCategories'])->name('categories');
    Route::resource('categories', CategoryController::class);

    // Resource routes for news
    Route::resource('news', NewsController::class);
    
});



// Authentication Routes
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
