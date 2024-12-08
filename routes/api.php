<?php

use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\Api\RegistroController;
use App\Http\Controllers\Api\RegistroComposteraController;
use App\Http\Controllers\Api\RegistroUserController;
use App\Http\Controllers\Api\RegistroAntesController;
use App\Http\Controllers\Api\RegistroDuranteController;
use App\Http\Controllers\Api\RegistroDespuesController;
use App\Http\Controllers\Api\AntesController;
use App\Http\Controllers\Api\DuranteController;
use App\Http\Controllers\Api\DespuesController;
use App\Http\Controllers\Api\ComposterasController;

Route::group(['as' => 'api.'], function () {
    Orion::resource('registros', RegistroController::class);
    Orion::resource('despues', DespuesController::class);
    Orion::resource('antes', AntesController::class);
    Orion::resource('durante', DuranteController::class);
    Orion::resource('composteras', ComposterasController::class);

    Orion::hasManyResource('registros', 'composteras', RegistroComposteraController::class);
    Orion::hasManyResource('registros', 'users', RegistroUserController::class);
    Orion::hasOneResource('registros', 'antes', RegistroAntesController::class);
    Orion::hasManyResource('registros', 'durante', RegistroDuranteController::class);
    Orion::hasManyResource('registros', 'despues', RegistroDespuesController::class);
});


// Route::apiResource('api/RegistroController', RegistroController::class)
// ->middleware(['verified', 'auth:sanctum']);


