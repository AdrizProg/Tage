<?php

namespace App\Http\Controllers\Api;

use App\Models\Antes;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'iniCliclo' => 'integer',
            'compostera' => 'integer',
            'user_id' => 'integer',
        ]);

        $registro = Registro::create($validatedData);
    }

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
