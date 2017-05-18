<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaFotoGondola extends Model{
    protected $table = 'categoria_foto_gondola';

    protected $fillable = [
        'descripcion'
    ];
}
