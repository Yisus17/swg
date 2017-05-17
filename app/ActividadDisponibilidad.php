<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadDisponibilidad extends Model{

    protected $table = 'actividad_disponibilidad';
    protected $fillable = [
        'actividad_id',
        'submarca_id',
        'hay_disponibilidad',
        'precio_botella',
        'numero_caras'
    ];
}
