<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $composteras = Compostera::all();
        return view('dashboard', compact('composteras'));
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
        return view('auth/registro');
    }
}
