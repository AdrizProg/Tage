<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Antesde extends Model
{
    public function antesde(): BelongsTo
    {
        return $this->belongsTo(Registro::class);
    }
}
