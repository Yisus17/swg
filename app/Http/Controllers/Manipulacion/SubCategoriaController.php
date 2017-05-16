<?php

namespace App\Http\Controllers\Manipulacion;

use App\Categoria;
use App\Subcategoria;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class SubCategoriaController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function data()
    {
        return Datatables::of(Subcategoria::select('categoria.descripcion_categoria','subcategoria.*')->
        join('categoria','subcategoria.categoria_id', '=','categoria.id')
        )->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResponseFac
     */
    public function index()
    {
        return view('manipulacion.subcategoria.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = $this->categoriaForSelect();
        return view('manipulacion.subcategoria.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validando($request);

        Subcategoria::create($request->all());
        return redirect('subcategoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = $this->categoriaForSelect();
        $subcategoria = Subcategoria::findOrFail($id);
        return view('manipulacion.subcategoria.edit',compact('subcategoria','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validando($request);

        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria->update($request->all());

        return redirect('subcategoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria->delete();

        return redirect('subcategoria');
    }

    /**
     * Devuelve un arreglo con la lista de entidades acreditadoras para un select
     *
     * @return array
     */
    public function categoriaForSelect(){
        return [''=>'- Seleccione -'] + Categoria::pluck('descripcion_categoria','id')->all();
    }

    /**
     * Validacion de Subcategoria
     *
     * @param Request $request
     */
    public function validando(Request $request){
        $this->validate($request, [
            'descripcion_subcategoria' => 'required|max:100',
            'categoria_id'=>'required'
        ], [
            'descripcion_subcategoria.required'=>'La Descripción del Subcategoria es requerida',
            'descripcion_subcategoria.max'=>'La Descripción del Subcategoria no puede ser mayor a 100 carateres',
            'categoria_id.required'=>'La Categoría es requerida',
        ]);
    }
}
