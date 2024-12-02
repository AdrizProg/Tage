<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Despues extends Model
{
    public function despuesde()
    {
        return $this->belongsTo(Registro::class);
    }
}
