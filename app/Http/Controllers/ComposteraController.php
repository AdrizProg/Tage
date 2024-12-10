<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Compostera;

class ComposteraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $composteraNueva = new Compostera();
        $composteraNueva->nombre = 'Compostera';
        $composteraNueva->centro = 1;
        $composteraNueva->tipo = 1;
        $composteraNueva->save();

        return redirect(route('dashboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $composteras = Compostera::all();
        return view('dashboard', compact('composteras', 'user'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function mostrarEstadisticas()
    {
        return view('auth/estadisticas');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function mostrarRegistro()
    {
        $composteras = Compostera::all();
        return view('auth/registro', compact('composteras'));
    }
}
