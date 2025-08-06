<?php

use Illuminate\Support\Facades\Route;

// Simple routes untuk preview tampilan (tanpa auth)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    Route::get('/users', function () {
        return view('admin.dashboard'); // Sementara ke dashboard
    })->name('users');
    
    Route::get('/users/create', function () {
        return view('admin.dashboard'); // Sementara ke dashboard
    })->name('users.create');
    
    Route::get('/products', function () {
        return view('admin.dashboard'); // Sementara ke dashboard
    })->name('products');
    
    Route::get('/products/create', function () {
        return view('admin.dashboard'); // Sementara ke dashboard
    })->name('products.create');
    
    Route::get('/orders', function () {
        return view('admin.dashboard'); // Sementara ke dashboard
    })->name('orders');
    
    Route::get('/analytics', function () {
        return view('admin.dashboard'); // Sementara ke dashboard
    })->name('analytics');
    
    Route::get('/settings', function () {
        return view('admin.dashboard'); // Sementara ke dashboard
    })->name('settings');
});

// Route homepage (opsional)
Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});