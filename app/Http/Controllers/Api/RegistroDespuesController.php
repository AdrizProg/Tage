<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;
use App\Models\Despues;

class RegistroDespuesController extends RelationController
{
    protected $model = Despues::class;
    protected $relation = 'registro';
}
