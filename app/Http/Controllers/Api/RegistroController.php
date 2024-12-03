<?php

namespace App\Http\Controllers\Api;

use App\Models\Antes;
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
        $nuevoAntes = new Antes();

        return view('registro');
    }
}
