<?php

namespace App\Http\Controllers;

use App\Actividad;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    function index(){
        $start = new Carbon('first day of this month');
        $end = new Carbon('last day of this month');
        $actividades = $this->getActividades($start->format('Y-m-d'),$end->format('Y-m-d'));
        $tiposClientes = $this->getTotalTipoCliente($start->format('Y-m-d'),$end->format('Y-m-d'));

        return view('procesos.calendario.index',compact('actividades','tiposClientes'));
    }
    function eventos(Request $request){

        $start =  $request->input('start');
        $end =  $request->input('end');


        return  $this->getActividades($start,$end);
    }
    function getActividades($start,$end){
        return Actividad::has('colaborador')
            ->select('id','descripcion_cita as title','fecha as start', 'cliente_id')
            ->where('fecha','>=',$start)
            ->where('fecha','<=',$end)
            ->get();
    }
    function getTotalTipoCliente($start,$end){
        $totalTipoCliente = DB::table('actividad')
            ->select('tipostore.descripcion_tipo', DB::raw('count(1) as total_tipo_cliente'))
            ->join('cliente', 'cliente.id', '=', 'actividad.cliente_id')
            ->join('tipostore', 'tipostore.id', '=', 'cliente.tipo_id')
            ->where('fecha','>=',$start)
            ->where('fecha','<=',$end)
            ->groupBy('cliente.tipo_id')
            ->groupBy('tipostore.descripcion_tipo')
            ->get();
        return $totalTipoCliente;
    }
}
