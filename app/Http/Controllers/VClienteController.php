<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cliente;
use App\CompetenciaMarca;
use App\Marca;
use App\Materialpop;
use App\Pais;
use App\PuntoConexion;
use App\Submarca;
use App\ActividadCompetencia;
use App\ActividadDisponibilidad;
use App\ActividadMaterialPop;
use App\ActividadPuntoConexion;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class VClienteController extends Controller
{
    function index($cliente_id){
        session(['cliente_id' => $cliente_id]);
        $cliente = Cliente::find($cliente_id);
        $categorias = Categoria::all();
        return view('procesos.vcliente.index', compact('cliente','categorias'));
    }
    function ajax(Request $request){
        $f = $request->f;
        switch ($f){
            case 'getFormCategoria':
                $categoria_id =  $request->categoria;
                $cliente_id = session('cliente_id');
                $categoria = Categoria::find($categoria_id);

                return view('procesos.vcliente.partial.form_categoria', compact('categoria','cliente_id'));
                break;
            case 'getMarcaPorCategoriaPais':

                $categoria_id =  $request->categoria;
                $pais_id = $request->pais;
                return $this->getMarcasPorPaisForSelect($categoria_id, $pais_id);
                break;
            case 'getFormSubMarca':
                $marca_id = $request->marca;
                $categoria_id = $request->categoria;
                $marca = Marca::find($marca_id);
                $marcascompetencias = CompetenciaMarca::where('categoria_id', '=', $categoria_id)->get();
                $submarcas = $this->getSubMarcaForSelect($marca_id);
                $materialpop = Materialpop::all();
                $puntodeconexiones = PuntoConexion::all();


                return view('procesos.vcliente.partial.submarca',compact('marca','submarcas','marcascompetencias','materialpop','puntodeconexiones'));
                break;

            case 'getSubMarcaPorMarcaPais':
                $marca_id=$request->marca;
                return $this->getSubMarcaForSelect($marca_id);
                break;
        }
        return 'no entro';
    }
    function marca($cliente_id,$categoria_id){
        $categoria = Categoria::find($categoria_id);
        $paises = $this->getPaisesForSelect($categoria_id);
        $marcas = $this->getMarcasPorPaisForSelect($categoria_id);

        return view('procesos.vcliente.partial.marca',compact('cliente_id','categoria','paises','marcas'));
    }
    function getPaisesForSelect($categoria_id){
        $paises =  Pais::join('marca', 'pais.id', '=', 'marca.pais_id')
            ->join('categoria', 'categoria.id', '=', 'marca.categoria_id')
            ->distinct()
            ->where('marca.categoria_id','=',$categoria_id)
            ->orderBy('pais.descripcion_pais')
            ->pluck('pais.descripcion_pais', 'pais.id')
            ->all();
        return [''=>'- Seleccione -'] + $paises;
    }
    function getMarcasPorPaisForSelect($categoria_id, $pais_id = ''){

            if ($pais_id != ''){
                $marcas = ['0'=>'- Seleccione -'] + Marca::where('categoria_id','like',$categoria_id)->where('pais_id','like',$pais_id)->pluck('descripcion_marca','id')->all();
            }else{
                $marcas = ['0'=>'- Seleccione -'] + Marca::where('categoria_id','like',$categoria_id)->pluck('descripcion_marca','id')->all();
            }
        return $marcas;
    }
    function getSubMarcaForSelect($marca_id){
        return Submarca::where('marca_id','=',$marca_id)->pluck('descripcion_submarca','id')->all();
    }

    //Salvar datos recopilados durante la visita al cliente
    public function guardarVisitaCliente(Request $request){
        $actividad_id = 2; //$request->actividad
        $submarca_id = 8; //$request->submarca

        //COMPETENCIA------------------------------
        $actividadCompetenciaData = [];
        
        $competenciaData = [ //$request->competencia
            1 => 12.78, 
            2 => 21.00
        ];

         foreach ($competenciaData as $competenciaId => $precioBotella) {
            array_push(
                $actividadCompetenciaData, 
                [
                    'actividad_id' => $actividad_id, 
                    'submarca_id' => $submarca_id,
                    'competencia_marca_id' => $competenciaId,
                    'precio_botella' => $precioBotella
                ]
            );  
        }

        //MATERIAL POP ---------------------------
        $actividadMaterialPopData = [];
        $material_pop_ids = [1,4,5]; //$request->materialpop

        foreach ($material_pop_ids as $key => $material_pop) {
            array_push(
                $actividadMaterialPopData, 
                [
                    'actividad_id' => $actividad_id, 
                    'submarca_id' => $submarca_id,
                    'materialpop_id' => $material_pop
                ]
            );  
        }

        // PUNTO CONEXION -----------------------------
        $actividadPuntoConexionData = [
            'actividad_id' => $actividad_id,
            'submarca_id' => $submarca_id,
            'punto_conexion_id' => 2,//request->punto_conexion
            'lleva_marca' => true //request->lleva_marca
        ];

        // DISPONIBILIDAD -----------------------------
        $actividadDisponibilidad = [];
        $disponible = true; //$request->disponible

        if($disponible){
            $actividadDisponibilidad = [
                'actividad_id' => $actividad_id, 
                'submarca_id' => $submarca_id,
                'hay_disponibilidad' => $disponible,
                'precio_botella' => 20.20, //$request->precio_botella
                'numero_caras' => 3, //$request->numero_caras
            ];

        }else{
             $actividadDisponibilidad = [
                'actividad_id' => $actividad_id, 
                'submarca_id' => $submarca_id,
                'hay_disponibilidad' => $disponible,
            ];
        }

        //dd($actividadDisponibilidad, $actividadCompetenciaData, $actividadMaterialPopData, $actividadPuntoConexionData);

        //ActividadDisponibilidad::create($actividadDisponibilidad);
        //ActividadCompetencia::create($actividadCompetenciaData);
        //ActividadMaterialPop::create($actividadMaterialPopData);
        //ActividadPuntoConexion::create($actividadPuntoConexionData);

        dd("Terminé");
    }
}
