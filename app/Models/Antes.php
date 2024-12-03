<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Registro;

class Antes extends Model
{
    public function registro()
    {
        return $this->belongsTo(Registro::class);
    }
}
