<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ciclo extends Model
{
    public function ciclo()
    {
        return $this->hasMany(Registro::class);
    }
}
