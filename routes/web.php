<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\GAuthController;

Route::get('/', [HomeController::class, 'redirect']);
Route::get('/logout', [HomeController::class, 'logout']);

Route::get('google', [GAuthController::class, "redirectgoogle"]);
Route::get('auth/google/callback', [GAuthController::class, "googlecallback"]);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
