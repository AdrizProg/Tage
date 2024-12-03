<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;
use App\Models\Registro;

class RegistroUserController extends RelationController
{
    protected $model = Registro::class;
    protected $relation = 'user';
}
