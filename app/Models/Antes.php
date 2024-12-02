<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Registro;

class Antes extends Model
{
    public function antesde()
    {
        return $this->belongsTo(Registro::class);
    }
}
