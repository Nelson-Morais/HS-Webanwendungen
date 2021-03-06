<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class ShipmodelController extends Controller
{
    protected $className = 'App\Models\Shipmodel';
    protected $entityName = 'shipmodels';
    protected $fields = ['name'];
    protected $validation = [
        'hersteller_id' => 'required',
        'name' => 'required'
    ];
    //
}
