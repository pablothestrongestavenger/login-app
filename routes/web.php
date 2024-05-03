<?php

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/landing', [AuthController::class, 'landing'])->name('landing')->middleware('auth');
Route::get('/error', [AuthController::class, 'error'])->name('error');
