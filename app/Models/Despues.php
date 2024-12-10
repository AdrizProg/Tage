<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Registro;

class Despues extends Model
{
    protected $fillable = [
        'registro_id',
        'nivelLlenado',
        'fotoFinal',
        'observaciones',
    ];

    public function registro()
    {
        return $this->belongsTo(Registro::class);
    }
}
