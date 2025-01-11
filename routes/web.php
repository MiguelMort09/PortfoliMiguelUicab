<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'welcome'])->name('welcome');


Route::middleware('guest')->group(function () {
    Route::get('auth/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.redirect');
    Route::get('auth/callback', [GoogleAuthController::class, 'callback'])->name('auth.callback');
});

Route::prefix('api')->group(function () {
    Route::get('skills', [\App\Http\Controllers\API\SkillsController::class, 'index'])->name('api.skills.index');
    Route::get('employments', [\App\Http\Controllers\API\EmploymentsController::class, 'index'])->name('api.employments.index');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('icons', [\App\Http\Controllers\SkillController::class, 'icons'])->name('get-icons');
    Route::resource('skills', \App\Http\Controllers\SkillController::class)->names('skills');
    Route::resource('employments', EmploymentController::class)->names('employments');

});

require __DIR__ . '/auth.php';
