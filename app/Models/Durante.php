<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Registro;

class Durante extends Model
{
    protected $fillable = [
        'registro_id',
        'riego',
        'revolver',
        'aporteVerde',
        'tipoAportVerde',
        'aporteSeco',
        'tipoAporteSeco',
        'fotoDurante',
        'observaciones',
    ];

    public function registro()
    {
        return $this->belongsTo(Registro::class);
    }
}
