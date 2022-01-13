<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class ShipController extends Controller
{
    protected $className = 'App\Models\Ship';
    protected $entityName = 'ships';
    protected $fields = ['shipmodel_id', 'name', 'brt','length','width','weight','power','motor'];

    protected $validation = [
        'shipmodel_id' => 'required',
        'name' => 'required',
        'brt' => 'required|numeric',
        'length' => 'numeric',
        'width' => 'numeric',
        'weight' => 'numeric'

    ];
    //
}
