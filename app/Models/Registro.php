<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Antes;
use App\Models\Durante;
use App\Models\Despues;
use App\Models\Compostera;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'iniCiclo',
        'compostera',
        'user_id',
    ];

    public function antesde()
    {
        return $this->hasOne(Antes::class);
    }

    public function durante()
    {
        return $this->hasOne(Durante::class);
    }

    public function despuesde()
    {
        return $this->hasOne(Despues::class);
    }

    public function compostera()
    {
        return $this->belongsTo(Compostera::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
