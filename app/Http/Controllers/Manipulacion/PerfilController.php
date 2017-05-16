<?php

namespace App\Http\Controllers\Manipulacion;

use App\Acciones;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($user_id)
    {
        $usuario = User::findOrFail($user_id);
        $acciones = $this->getAccionesTree(0, $user_id);
        return view('auth.perfil',compact('acciones','user_id','usuario'));
    }
    public function guardar(Request $request,$user_index){
        $usuario = User::findOrFail($user_index);
        $perfiles = $request->input('perfil');
        $perfiles = is_array($perfiles)?$perfiles:array();
        $usuario->acciones()->sync($perfiles,false);
        $usuario->acciones()->sync($perfiles);
    }
    public function getAccionesTree($id_accion,$user_id)
    {

        $acciones = Acciones::with(['usuarios'=>
            function($query) use ($user_id){
                $query->where('usuario_id','=',$user_id);
            }
        ])->where('id_padre',$id_accion)->get()->toArray();
        foreach($acciones as $key=>$accion){
            $acciones[$key]['checked'] = count($accion['usuarios'])>0?true:false;
            $acciones[$key]['hijos'] = $this->getAccionesTree($accion['id'], $user_id);
        }
        return $acciones;
    }
}
