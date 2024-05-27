<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadeController;


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('/entidades', [EntidadeController::class, 'store'])->name('entidade.store');

require __DIR__.'/auth.php';
