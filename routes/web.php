<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

Route::get('/', fn() => view('landing-page'));

Route::get('/register', [RegisterController::class, 'view'])->name('register');
Route::get('/login', [LoginController::class, 'view'])->name('login');

Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/main', [MainController::class, 'view'])->middleware('auth')->name('main');