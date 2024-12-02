<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Compostera extends Model
{
    public function compostera()
    {
        return $this->hasMany(Registro::class);
    }
}
