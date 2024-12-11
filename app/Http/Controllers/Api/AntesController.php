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
        // Recupera todos los registros de la tabla 'antes'
        $registros = Antes::all();

        // Retorna los registros como una respuesta JSON con estado HTTP 200
        return response()->json([
            'success' => true,
            'data' => $registros
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'registro_id' => 'required|integer',
            'tempAmbiente' => 'nullable|numeric',
            'tempCompostera' => 'nullable|numeric',
            'nivelLlenado' => 'nullable|integer',
            'olor' => 'nullable|in:Podrido,Amoniaco,Sin olor,Otro',
            'insectos' => 'nullable|in:Moscas,Larbas,Ratones,Otro',
            'humedad' => 'nullable|in:Muy mojado,Bien,Seco,Otro',
            'foto' => 'nullable|image|max:2048',
            'otroOlor' => 'nullable|string|max:255',
            'otroInsecto' => 'nullable|string|max:255',
            'otroHumedad' => 'nullable|string|max:255',
        ]);

        // Crear un nuevo registro
        $registro = Antes::create($validatedData);

        // Retornar una respuesta exitosa
        return response()->json([
            'success' => true,
            'data' => $registro,
            'message' => 'Registro creado exitosamente.'
        ], 201);
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
        \Log::info('Intentando eliminar el registro con ID: ' . $antes->id);

        try {
            $antes->delete();

            return response()->json([
                'success' => true,
                'message' => 'Registro eliminado exitosamente.'
            ], 200);
        } catch (\Exception $e) {
            \Log::error('Error al intentar eliminar el registro: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el registro.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

}
