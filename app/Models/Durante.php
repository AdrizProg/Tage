<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Registro;

class Durante extends Model
{
    public function registro()
    {
        return $this->belongsTo(Registro::class);
    }
}
