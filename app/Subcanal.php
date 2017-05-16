<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcanal extends Model
{
    protected $table = 'subcanal';
    protected $fillable = [ 'descripcion_subcanal','canal_id' ];
}

function canal()
{
    return $this->belongsTo('App\Canal','canal_id');
}