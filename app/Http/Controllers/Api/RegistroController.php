<?php

namespace App\Http\Controllers\Api;

use App\Models\Antesde;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
use App\Models\Registro;

class RegistroController extends Controller
{
    /**
     * Fully-qualified model class name
     */
    // use DisableAuthorization;
    protected $model = Registro::class; // or "App\Models\Post"

    public function mostrarAntes()
    {
        $nuevoAntes = new Antesde();

        return view('registro');
    }
}
