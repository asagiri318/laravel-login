<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
