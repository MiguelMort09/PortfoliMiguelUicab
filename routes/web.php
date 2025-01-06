<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TechnologiesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'welcome'])->name('welcome');
Route::get('employments', [EmploymentController::class, 'index'])->name('employments.index');
Route::get('technologies', [TechnologiesController::class, 'index'])->name('technologies.index');

Route::middleware('guest')->group(function () {
    Route::get('auth/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.redirect');
    Route::get('auth/callback', [GoogleAuthController::class, 'callback'])->name('auth.callback');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
