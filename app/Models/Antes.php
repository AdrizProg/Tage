<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Antes extends Model
{
    use HasFactory;

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
        'observaciones',
    ];

    public function registro()
    {
        return $this->belongsTo(Registro::class);
    }
}
