<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadeController;


Route::view('/', 'home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';

Route::view('/home', 'home');
Route::view('/entidades', 'entidades');
Route::view('/noticias', 'noticias' );
Route::view('/primeira', 'primeira' );
Route::view('/segunda', 'segunda');
Route::view('/terceira', 'terceira');
Route::view('/quarta', 'quarta');
