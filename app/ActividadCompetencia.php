<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadCompetencia extends Model{

    protected $table = 'actividad_competencia';
    protected $fillable = [
        'actividad_id',
        'submarca_id',
        'competencia_marca_id',
        'precio_botella',
        'precio_copa'
    ];
    
    function actividad(){
        return $this->belongsTo('App\Actividad','actividad_id');
    }

    
}
