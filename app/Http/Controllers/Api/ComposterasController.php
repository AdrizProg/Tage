<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compostera;

class ComposterasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $composteras = Compostera::all(); // Obtener todas las composteras
        return response()->json($composteras, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'nullable|string|max:255', // Campo requerido y debe ser un número entero
            'tipo' => 'nullable|in:Aporte,Degradacion,Maduracion,Vacia', // Campo opcional, debe ser numérico
            'centro' => 'nullable|integer',
        ]);

        $registro = Compostera::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos enviados en la solicitud
        $validatedData = $request->validate([
            'nombre' => 'nullable|string|max:255',
            'tipo' => 'nullable|in:Aporte,Degradacion,Maduracion,Vacia',
            'centro' => 'nullable|integer',
        ]);
    
        // Buscar la compostera por su ID
        $compostera = Compostera::find($id);
    
        // Verificar si la compostera existe
        if (!$compostera) {
            return response()->json(['error' => 'Compostera no encontrada'], 404);
        }
    
        // Actualizar los datos de la compostera
        $compostera->update($validatedData);
    
        // Devolver una respuesta exitosa
        return response()->json(['message' => 'Compostera actualizada con éxito', 'data' => $compostera], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
