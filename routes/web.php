<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'inicio'])->name('inicio');
Route::get('/acerca', [PublicController::class, 'acerca'])->name('acerca');
Route::get('/miembros', [PublicController::class, 'miembros'])->name('miembros');
Route::get('/chatbots', [PublicController::class, 'chatbots'])->name('chatbots');
Route::get('/recursos', [PublicController::class, 'recursos'])->name('recursos');
