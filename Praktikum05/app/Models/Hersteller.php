<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Hersteller extends Model
{

    public function models()
    {
        return $this->hasMany(Shipmodel::class);
    }

    public function getModels()
    {
        return $this->models()->orderBy('name', 'desc')->get();
    }


}
