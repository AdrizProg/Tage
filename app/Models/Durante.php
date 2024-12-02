<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Durante extends Model
{
    public function durante(): BelongsTo
    {
        return $this->belongsTo(Registro::class);
    }
}
