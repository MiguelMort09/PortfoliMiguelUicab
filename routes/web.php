<?php

use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TechnologiesController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcome');

Route::get('/employments', [EmploymentController::class, 'index'])->name('employments.index');

Route::get('technologies', [TechnologiesController::class, 'index'])->name('technologies.index');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('google')->user();

    $user = \App\Models\User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->name,
        'email' => $githubUser->email,
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
    ]);

    \Illuminate\Support\Facades\Auth::login($user);

    return redirect('/dashboard');

});
require __DIR__ . '/auth.php';
