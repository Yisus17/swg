<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadFotoGondola extends Model{
    protected $table = 'actividad_foto_gondola';

    protected $fillable = [
        'actividad_id',
        'submarca_id',
        'url',
        'categoria_foto_gondola_id'
    ];
}
