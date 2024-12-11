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
        $user = Auth::user();

        if (request()->exists('registro')) {
            $registroAntes = Antes::where('registro_id', request()->get('registro'))->get();
            $registroDurante = Durante::where('registro_id', request()->get('registro'))->get();
            $registroDespues = Despues::where('registro_id', request()->get('registro'))->get();

            return view('registros.registros', compact('registroAntes', 'registroDurante', 'registroDespues'));
        }

        if ($user->admin == 1) {
            $registros = Registro::all();
            return view('registros.registro', compact('registros', 'user'));
        } else {
            $registros = Registro::where('user_id', $user->id)->get();
            return view('registros.registro', compact('registros', 'user'));
        }
    }
}
