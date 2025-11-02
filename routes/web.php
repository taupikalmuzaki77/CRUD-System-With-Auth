<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['guest'])->group(function()
{
    Route::get('register', [AuthController::class, 'registerForm'])->name('register.page');

    Route::get('login', [AuthController::class, 'loginForm'])->name('login.page');
});

Route::post('register', [AuthController::class, 'register'])->name('register');

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('dashboard', [AuthController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware(['auth']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('post', PostController::class);