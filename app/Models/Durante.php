<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Durante extends Model
{
    public function registro(): BelongsTo
    {
        return $this->belongsTo(Registro::class);
    }
}
