<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth', 'job:user'])->group(function () {
    Route::get('dashboard/fashion', [DashboardController::class, 'index'])->name('dashboard.fashion');
});
Route::middleware(['auth', 'job:admin'])->group(function () {
    Route::get('dashboard/admin', [DashboardController::class, 'adminHome'])->name('dashboard.admin');
});

Route::resource('dashboard', ProdukController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');