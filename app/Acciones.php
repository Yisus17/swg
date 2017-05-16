<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acciones extends Model
{
    protected $table = "acciones";
    function usuarios(){
        return $this->belongsToMany('App\User','accion_usuario','accion_id','usuario_id');
    }
}
