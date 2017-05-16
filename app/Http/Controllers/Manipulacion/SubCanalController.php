<?php

namespace App\Http\Controllers\Manipulacion;

use App\Canal;
use App\Subcanal;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class SubCanalController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function data()
    {
        return Datatables::of(Subcanal::select('canal.descripcion_canal','subcanal.*')->
        join('canal','subcanal.canal_id', '=','canal.id')
        )->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResponseFac
     */
    public function index()
    {
        return view('manipulacion.subcanal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $canales = $this->canalForSelect();
        return view('manipulacion.subcanal.create',compact('canales'));
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

        Subcanal::create($request->all());
        return redirect('subcanal');
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
        $canales = $this->canalForSelect();
        $subcanal = Subcanal::findOrFail($id);
        return view('manipulacion.subcanal.edit',compact('subcanal','canales'));
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

        $subcanal = Subcanal::findOrFail($id);
        $subcanal->update($request->all());

        return redirect('subcanal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcanal = Subcanal::findOrFail($id);
        $subcanal->delete();

        return redirect('subcanal');
    }

    /**
     * Devuelve un arreglo con la lista de entidades acreditadoras para un select
     *
     * @return array
     */
    public function canalForSelect(){
        return [''=>'- Seleccione -'] + Canal::pluck('descripcion_canal','id')->all();
    }

    /**
     * Validacion de Subcanal
     *
     * @param Request $request
     */
    public function validando(Request $request){
        $this->validate($request, [
            'descripcion_subcanal' => 'required|max:100',
            'canal_id'=>'required'
        ], [
            'descripcion_subcanal.required'=>'La Descripción del Subcanal es requerida',
            'descripcion_subcanal.max'=>'La Descripción del Subcanal no puede ser mayor a 100 carateres',
            'canal_id.required'=>'El Canal es requerido',
        ]);
    }
}
