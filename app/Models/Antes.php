<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Registro;

class Antes extends Model
{
    protected $fillable = [
        'registro_id',
        'tempAmbiente',
        'tempCompostera',
        'nivelLlenado',
        'olor',
        'otroOlor',
        'insectos',
        'otroInsecto',
        'humedad',
        'otroHumedad',
        'foto',
    ];
    
    public function registro()
    {
        return $this->belongsTo(Registro::class);
    }
}
