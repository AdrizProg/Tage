<?php

use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\Api\RegistroController;
use App\Http\Controllers\Api\RegistroComposteraController;
use App\Http\Controllers\Api\RegistroUserController;
use App\Http\Controllers\Api\AntesController;
use App\Http\Controllers\Api\DuranteController;

Route::group(['as' => 'api.'], function() {
    Orion::resource('registros', RegistroController::class);
});

Route::group(['as' => 'api.'], function() {
    Orion::resource('antes', AntesController::class);
});

Route::group(['as' => 'api.'], function() {
    Orion::resource('durante', DuranteController::class);
});

// Route::apiResource('api/RegistroController', RegistroController::class)
// ->middleware(['verified', 'auth:sanctum']);

Orion::hasManyResource('registros', 'composteras', RegistroComposteraController::class);
Orion::hasManyResource('registros', 'users', RegistroUserController::class);
Orion::hasManyResource('registros', 'antes', RegistroUserController::class);
Orion::hasManyResource('registros', 'durante', RegistroUserController::class);
Orion::hasManyResource('registros', 'despues', RegistroUserController::class);
