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
            'olor' => 'nullable|in:Podrido', // Valor opcional de tipo enum (ajusta los valores según corresponda)
            'insectos' => 'nullable|in:Y,N',
            'humedad' => 'nullable|in:Muy mojado',
            'foto' => 'nullable|image|max:2048',
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
