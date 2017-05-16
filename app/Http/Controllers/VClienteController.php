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
}
