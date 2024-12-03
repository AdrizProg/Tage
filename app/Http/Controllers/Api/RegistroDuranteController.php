<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;
use App\Models\Durante;

class RegistroDuranteController extends RelationController
{
    protected $model = Durante::class;
    protected $relation = 'registro';
}
