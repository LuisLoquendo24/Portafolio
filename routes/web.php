<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProyectoController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'inicio'])->name('dashboard');
    Route::get('/sobre-mi', [DashboardController::class, 'sobreMi'])->name('sobre-mi');
    Route::get('/portafolio', [DashboardController::class, 'portafolio'])->name('portafolio');
    Route::get('/educacion', [DashboardController::class, 'educacion'])->name('educacion');
    Route::get('/habilidades', [DashboardController::class, 'habilidades'])->name('habilidades');
    Route::get('/contacto', [DashboardController::class, 'contacto'])->name('contacto');
});

