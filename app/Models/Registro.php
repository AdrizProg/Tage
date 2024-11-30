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
        return $this->hasMany(Antesde::class);
    }

    public function durante()
    {
        return $this->hasMany(Durante::class);
    }

    public function despuesde()
    {
        return $this->hasMany(Despuesde::class);
    }

    public function compostera()
    {
        return $this->hasMany(Compostera::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
