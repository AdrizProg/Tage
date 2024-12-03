<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;
use App\Models\Antes;

class RegistroAntesController extends RelationController
{
    protected $model = Antes::class;
    protected $relation = 'registro';
}
