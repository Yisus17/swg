<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = ['codigo','descripcion_cliente','canal_id','subcanal_id','key_account','vendedor','contacto','tel1','tel2','email','direccion'];

    function canal()
    {
        return $this->belongsTo('App\Canal','canal_id');
    }
    function subcanal()
    {
        return $this->belongsTo('App\Subcanal','subcanal_id');
    }
    function key_account()
    {
        return $this->belongsTo('App\Colaborador','key_account');
    }
    function vendedor()
    {
        return $this->belongsTo('App\Colaborador','vendedor');
    }
}