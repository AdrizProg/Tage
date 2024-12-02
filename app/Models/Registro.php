<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Antesde;
use App\Models\Durante;
use App\Models\Despuesde;
use App\Models\Compostera;
use App\Models\User;

class Registro extends Model
{
    public function antesde()
    {
        return $this->hasOne(Antesde::class);
    }

    public function durante()
    {
        return $this->hasOne(Durante::class);
    }

    public function despuesde()
    {
        return $this->hasOne(Despuesde::class);
    }

    public function compostera()
    {
        return $this->belongsTo(Compostera::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ciclo()
    {
        return $this->belongsTo(Ciclo::class);
    }
}
