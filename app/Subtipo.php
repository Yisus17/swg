<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtipo extends Model
{
    protected $table = 'subtipostore';
    protected $fillable = [ 'descripcion_subtipo','tipo_id' ];
}

function tipo()
{
    return $this->belongsTo('App\Tipo','tipo_id');
}
