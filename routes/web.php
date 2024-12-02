<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegistroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComposteraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ComposteraController::class, 'store'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::apiResource('RegistroController', RegistroController::class)
    ->middleware(['verified', 'auth:sanctum']);

Route::get('/nuevaCompostera', [ComposteraController::class, 'create'])
    ->middleware(['verified', 'auth:sanctum']);

Route::get('/registro', [ComposteraController::class, 'crearRegistro'])
    ->middleware(['verified', 'auth:sanctum']);

Route::resource('users', UserController::class)->middleware(['verified', 'auth:sanctum']);

require __DIR__ . '/auth.php';
