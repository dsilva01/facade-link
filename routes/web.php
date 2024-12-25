<?php

use App\Http\Controllers\LinkController;
use App\Http\Middleware\StoreLinkRequestIfNotAuthenticated;
use App\Livewire\Dashboard;
use App\Livewire\Landing;
use App\Livewire\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', Landing::class)->name('landing');
Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');
Route::get('/settings', Settings::class)->name('settings')->middleware('auth');
Route::post('/links', [LinkController::class, 'store'])->name('links.store')->middleware(StoreLinkRequestIfNotAuthenticated::class);
Route::get('/{URLKey}', LinkController::class)->name('links.redirect');

Route::redirect('/auth/login', '/auth/google/redirect')->name('login');

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('auth.google.redirect');

Route::get('/auth/google/callback', function (Request $request) {
    $socialUser = Socialite::driver('google')->stateless()->user();

    $user = User::where('email', $socialUser->email)->first();

    if (!$user) {
        $user = User::create([
            'name' => $socialUser->name,
            'email' => $socialUser->email,
            'avatar' => $socialUser->avatar,
            'email_verified_at' => now(),
            'password' => Hash::make(rand(100000, 999999))
        ]);
    }

    Auth::login($user);

    return redirect()->intended('dashboard');
});

Route::get('/auth/logout', function (Request $request) {
    Auth::logout();

    $request->session()->flush();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('auth.logout')->middleware('auth');

Route::get('/auth/auto', function (Request $request) {
    Auth::login(User::first());
    return redirect()->route('dashboard');
});