<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected  $table = 'actividad';

    function cliente(){
        return $this->belongsTo('App\Cliente', 'cliente_id');
    }
    function colaborador(){
        return $this->belongsTo('App\Colaborador');
    }

}
