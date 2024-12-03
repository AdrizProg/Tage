<?php

use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\Api\RegistroController;
use App\Http\Controllers\Api\RegistroComposteraController;
use App\Http\Controllers\Api\RegistroUserController;

Route::group(['as' => 'api.'], function() {
    Orion::resource('registros', RegistroController::class);
});

// Route::apiResource('api/RegistroController', RegistroController::class)
// ->middleware(['verified', 'auth:sanctum']);

Orion::hasManyResource('registros', 'composteras', RegistroComposteraController::class);
Orion::hasManyResource('registros', 'users', RegistroUserController::class);
Orion::hasManyResource('registros', 'antes', RegistroUserController::class);
Orion::hasManyResource('registros', 'durante', RegistroUserController::class);
Orion::hasManyResource('registros', 'despues', RegistroUserController::class);