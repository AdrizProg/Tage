<?php

use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\api\centroController;

Route::group(['as' => 'api.'], function() {
    Orion::resource('centros', CentroController::class);
});