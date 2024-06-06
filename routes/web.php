<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\EntidadeController;
use App\Http\Controllers\NoticiaController;





Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';

//Rotas Publicas
Route::get('/', [LocalController::class, 'index'])->name('locais');
Route::get('/entidades/{local}', [EntidadeController::class, 'show'])->name('entidades');
Route::get('/noticias/{entidade}', [NoticiaController::class, 'show'])->name('noticias');


//Rotas Privadas
Route::middleware(['auth'])->group(function () {
    Route::get('/entidadeDash', [EntidadeController::class, 'index'])->name('entidadeDash');
    Route::get('/entidade', [EntidadeController::class, 'create'])->name('entidadeCreate');
    Route::post('/entidades', [EntidadeController::class, 'store'])->name('entidade.store');
    Route::get('/entidades/{entidade}', [EntidadeController::class, 'show'])->name('entidades.show');
    Route::get('/entidades/{entidade}/edit', [EntidadeController::class, 'edit'])->name('entidadesEdit');
    Route::put('/entidades/{entidade}', [EntidadeController::class, 'update'])->name('entidades.update');
    Route::delete('/entidades/{entidade}', [EntidadeController::class, 'destroy'])->name('entidades.destroy');

    Route::get('/noticiaDash', [NoticiaController::class, 'index'])->name('noticiaDash');
    Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticia.store');
    Route::get('/noticia', [NoticiaController::class, 'create'])->name('noticiaCreate');
    Route::get('/noticias/{noticia}/edit', [NoticiaController::class, 'edit'])->name('noticiasEdit');
    Route::put('/noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticia.update');
    Route::delete('/noticias/{noticia}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');
});
