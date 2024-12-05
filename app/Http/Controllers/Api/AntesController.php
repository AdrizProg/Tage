<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Antes;
use Illuminate\Http\Request;

class AntesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'registro_id' => 'required|integer', // Campo requerido y debe ser un número entero
            'tempAmbiente' => 'nullable|numeric', // Campo opcional, debe ser numérico
            'tempCompostera' => 'nullable|numeric',
            'nivelLlenado' => 'nullable|integer', // Entero opcional
            'olor' => 'nullable|in:Podrido,Amoniaco,Sin olor,Otro', // Enum actualizado
            'insectos' => 'nullable|in:Moscas,Larbas,Ratones,Otro', // Enum actualizado
            'humedad' => 'nullable|in:Muy mojado,Bien,Seco,Otro', // Enum actualizado
            'foto' => 'nullable|image|max:2048', // Campo opcional para imágenes
        
            // Nuevos campos de texto para especificar otros valores
            'otroOlor' => 'nullable|string|max:255', // Campo opcional de texto
            'otroInsecto' => 'nullable|string|max:255', // Campo opcional de texto
            'otroHumedad' => 'nullable|string|max:255', // Campo opcional de texto
        ]);

        $registro = Antes::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Antes $antes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Antes $antes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Antes $antes)
    {
        //
    }
}
