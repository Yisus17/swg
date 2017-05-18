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
use Carbon\Carbon;


use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class VClienteController extends Controller{

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
                //return Marca::where('categoria_id','like',$categoria_id)->where('pais_id','like',$pais_id)->pluck('descripcion_marca','id');
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
                
                return view('procesos.vcliente.partial.submarca',compact('marca','submarcas','marcascompetencias','materialpop','puntodeconexiones','marcascompetencias'));
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
    public function guardarActividadSubmarca(Request $request){

        $success = 1;

        if(!isset($request->submarca))
            $success = 0;

        $actividad_id = 2; //$request->actividad
        $submarca_id = $request->submarca;
        
        //COMPETENCIA------------------------------
        $actividadCompetenciaData = [];
        
        if(isset($request->competencia)){
            $competenciaData = $request->competencia;

            foreach ($competenciaData as $competenciaId => $precioBotella) {
                array_push(
                    $actividadCompetenciaData, 
                    [
                        'actividad_id' => $actividad_id, 
                        'submarca_id' => $submarca_id,
                        'competencia_marca_id' => $competenciaId,
                        'precio_botella' => $precioBotella,
                        'created_at'    => Carbon::now(),
                        'updated_at'    => Carbon::now()
                    ]
                );  
            }
        }
       

        //MATERIAL POP ---------------------------
        $actividadMaterialPopData = [];
        
        if(isset($request->materialpop)){
            $material_pop_ids = $request->materialpop;

            foreach ($material_pop_ids as $key => $material_pop) {
                array_push(
                    $actividadMaterialPopData, 
                    [
                        'actividad_id' => $actividad_id, 
                        'submarca_id' => $submarca_id,
                        'materialpop_id' => $material_pop,
                        'created_at'    => Carbon::now(),
                        'updated_at'    => Carbon::now()
                    ]
                );  
            }
        }
        

        // PUNTO CONEXION -----------------------------
        $actividadPuntoConexionData = [];

        if(isset($request->punto_conexion)){
            $lleva_marca = isset($request->lleva_marca);
            $actividadPuntoConexionData = [
                'actividad_id' => $actividad_id,
                'submarca_id' => $submarca_id,
                'punto_conexion_id' => $request->punto_conexion,
                'lleva_marca' => $lleva_marca
            ];
        }

        // DISPONIBILIDAD -----------------------------
        $actividadDisponibilidad = [];

        if(isset($request->disponible)){
            $precio_botella = 0;
            if(isset($request->precio_botella)){
                $precio_botella = $request->precio_botella;
            }

            $numero_caras = 0;
            if(isset($request->precio_botella)){
                $numero_caras = $request->numero_caras;
            }

            $actividadDisponibilidad = [
                'actividad_id' => $actividad_id, 
                'submarca_id' => $submarca_id,
                'hay_disponibilidad' => true,
                'precio_botella' => $precio_botella,
                'numero_caras' => $numero_caras,
            ];

        }else{
            $actividadDisponibilidad = [
                'actividad_id' => $actividad_id, 
                'submarca_id' => $submarca_id,
                'hay_disponibilidad' => false,
            ];
        }

        // FOTO ----------------------------------------------
        /*if($request->file('foto')){

            $actividadFotoData = [];

            try{
                $currentFile=$request->file('foto');
                if( $currentFile->isValid() ) {
                    $filePath = public_path('images/visitas');
                    $fileName = uniqid('visita_') . $actividad_id . '_'. $submarca_id .  '.' . $currentFile->getClientOriginalExtension();
                    $currentFile->move($filePath, $fileName);

                    $actividadFotoData = [
                        'actividad_id' => $actividad_id, 
                        'submarca_id' => $submarca_id,
                        'url' => '/images/visitas/'. $fileName,
                        'categoria' => 1
                    ];

                }else{
                    throw new \Exception ("Imagen no válida");
                }
            }catch(\Exception $e){
                Log::error($e->getMessage());
                dd('Error foto');
            }
        }*/

        // GUARDAR DATA ---------------------------------
        ActividadDisponibilidad::create($actividadDisponibilidad);
        ActividadCompetencia::insert($actividadCompetenciaData);
        ActividadMaterialPop::insert($actividadMaterialPopData);
        ActividadPuntoConexion::create($actividadPuntoConexionData);
        
        return $success;
    }
}
