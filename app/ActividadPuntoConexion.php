<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadPuntoConexion extends Model{

    protected $table = 'actividad_punto_conexion';
    protected $fillable = [
        'actividad_id',
        'submarca_id',
        'punto_conexion_id',
        'lleva_marca'
    ];
}
