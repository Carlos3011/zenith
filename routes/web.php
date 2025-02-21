<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'inicio')->name('inicio');
    Route::get('/acerca', 'acerca')->name('acerca');
    Route::get('/ofertas', 'recurso')->name('recursos');
    Route::get('/miembros', 'miembros')->name('miembros');
    Route::get('/chatbots', 'chatbots')->name('chatbots');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
