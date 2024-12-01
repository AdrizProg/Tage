<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegistroController;
use App\Http\Controllers\UserController;
use App\Models\Compostera;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $composteras = Compostera::all();
    return view('dashboard', compact('composteras'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::apiResource('RegistroController', RegistroController::class)
    ->middleware(['verified', 'auth:sanctum']);

Route::resource('users', UserController::class)->middleware(['verified', 'auth:sanctum']);

require __DIR__ . '/auth.php';
