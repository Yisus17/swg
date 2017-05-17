<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadMaterialPop extends Model{
    protected $table = 'actividad_material_pop';
    protected $fillable = [
        'actividad_id',
        'submarca_id',
        'materialpop_id'
    ];
}
