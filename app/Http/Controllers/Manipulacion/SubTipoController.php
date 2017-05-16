<?php

namespace App\Http\Controllers\Manipulacion;

use App\Subtipo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class SubTipoController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function data()
    {
        return Datatables::of(Subtipo::select('tipostore.descripcion_tipo','subtipostore.*')->
        join('tipostore','subtipostore.tipo_id', '=','tipostore.id')
        )->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResponseFac
     */
    public function index()
    {
        return view('manipulacion.subtipo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = $this->tipoForSelect();
        return view('manipulacion.subtipo.create',compact('tipoes'));
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

        Subtipo::create($request->all());
        return redirect('subtipo');
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
        $tipos = $this->tipoForSelect();
        $subtipo = Subtipo::findOrFail($id);
        return view('manipulacion.subtipo.edit',compact('subtipo','tipoes'));
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

        $subtipo = Subtipo::findOrFail($id);
        $subtipo->update($request->all());

        return redirect('subtipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subtipo = Subtipo::findOrFail($id);
        $subtipo->delete();

        return redirect('subtipo');
    }

    /**
     * Devuelve un arreglo con la lista de entidades acreditadoras para un select
     *
     * @return array
     */
    public function tipoForSelect(){
        return [''=>'- Seleccione -'] + Tipo::pluck('descripcion_tipo','id')->all();
    }

    /**
     * Validacion de Subtipo
     *
     * @param Request $request
     */
    public function validando(Request $request){
        $this->validate($request, [
            'descripcion_subtipo' => 'required|max:100',
            'tipo_id'=>'required'
        ], [
            'descripcion_subtipo.required'=>'La Descripción del Subtipo es requerida',
            'descripcion_subtipo.max'=>'La Descripción del Subtipo no puede ser mayor a 100 carateres',
            'tipo_id.required'=>'El Tipo es requerido',
        ]);
    }
}
