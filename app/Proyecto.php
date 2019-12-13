<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function empleado()
    {
        return $this->hasOne('App\Empleado');
    }
    public function empleados()
    {
        return $this->belongsToMany('App\Empleado');
    }
    
}
