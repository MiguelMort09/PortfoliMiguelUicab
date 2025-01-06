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
    return Socialite::driver('google')->redirect();
})->name('auth.redirect');

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('google')->user();


    $user = \App\Models\User::where('email', $githubUser->getEmail())->first();

    if ($user === null) {
        $user = \App\Models\User::create([
            'name' => $githubUser->getName(),
            'email' => $githubUser->getEmail(),
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);
    }

    \Illuminate\Support\Facades\Auth::login($user);

    return redirect()->route('dashboard');

})->name('auth.callback');
require __DIR__ . '/auth.php';
