<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'show'])->name('home');


Route::get('/settings', function () { return view('settings'); })->name('settings');

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard.index');
    Route::get('/dashboard/create', 'create')->name('dashboard.create');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->name('user.index');
    Route::post('/user/create', 'create')->name('user.create');
    Route::get('/user/create', 'create')->name('user.create');
});