<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = 'subcategoria';
    protected $fillable = [ 'descripcion_subcategoria','categoria_id' ];
}

function categoria()
{
    return $this->belongsTo('App\Categoria','categoria_id');
}