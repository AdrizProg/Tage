<?php

use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\Api\RegistroController;

Route::group(['as' => 'api.'], function() {
    Orion::resource('registros', RegistroController::class);
});