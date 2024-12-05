<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Durante;
use Illuminate\Http\Request;

class DuranteController extends Controller
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
            'riego' => 'nullable|in:Si,No', // Campo opcional, debe ser numérico
            'revolver' => 'nullable|in:Si,No',
            'aporteVerde' => 'nullable|integer', // Entero opcional
            'tipoAportVerde' => 'nullable|string|max:255', // Enum actualizado
            'aporteSeco' => 'nullable|integer', // Enum actualizado
            'tipoAporteSeco' => 'nullable|string|max:255', // Enum actualizado
            'fotoDurante' => 'nullable|image|max:2048', // Campo opcional para imágenes
            'observaciones' => 'nullable|string|max:255',
        ]);

        $registro = Durante::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Durante $antes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Durante $antes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Durante $antes)
    {
        //
    }
}
