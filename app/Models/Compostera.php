<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Compostera extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'centro',
    ];

    public function compostera()
    {
        return $this->hasMany(Registro::class);
    }
}
