<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Despues;
use Illuminate\Http\Request;

class DespuesController extends Controller
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
            'nivelLLenado' => 'nullable|numeric', // Campo opcional, debe ser numérico
            'fotoFinal' => 'nullable|image|max:2048',
            'observaciones' => 'nullable|string|max:255',
        ]);

        $registro = Despues::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Despues $antes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Despues $antes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Despues $antes)
    {
        //
    }
}
