<?php

namespace App\Http\Controllers\Api;

use App\Models\Antes;
use App\Models\Durante;
use App\Models\Despues;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Compostera;
use App\Models\User;

class RegistroController extends Controller
{

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'iniCiclo' => 'integer',
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
        return view('registro');
    }

    public function mostrarRegistros()
    {
        if (request()->exists('registro')) {
            $registroAntes = Antes::where('registro_id', request()->get('registro'))->get();
            $registroDurante = Durante::where('registro_id', request()->get('registro'))->get();
            $registroDespues = Despues::where('registro_id', request()->get('registro'))->get();

            return view('registros.registros', compact('registroAntes', 'registroDurante', 'registroDespues'));
        }

        $usuarios = new User();
        $composteras = new Compostera();

        if (Auth::User()->admin == 1) {
            $registros = Registro::all();
            return view('registros.registro', compact('registros', 'usuarios', 'composteras'));
        } else {
            $registros = Registro::where('user_id', $usuarios->id)->get();
            return view('registros.registro', compact('registros', 'usuarios', 'composteras'));
        }
    }

    public function delete($id)
    {
            // Buscar el registro por ID
            $registro = Registro::find($id);

            // Eliminar el registro
            $registro->delete();

    }
}