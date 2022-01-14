<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class HerstellerController extends Controller
{
    protected $className = 'App\Models\Hersteller';
    protected $entityName = 'hersteller';
    protected $fields = ['name'];

    protected $validation = [
        'name' => 'required',
    ];
    //
}
