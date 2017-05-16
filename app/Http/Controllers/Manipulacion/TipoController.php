<?php

namespace App\Http\Controllers\Manipulacion;

use App\Tipo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class TipoController extends Controller
{
    public function data()
    {
        return Datatables::of(Tipo::select('*'))->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manipulacion.tipo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manipulacion.tipo.create');
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

        Tipo::create($request->all());
        return redirect('tipo');
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
        $tipo = Tipo::findOrFail($id);
        return view('manipulacion.tipo.edit',compact('tipo'));
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

        $tipo = Tipo::findOrFail($id);
        $tipo->update($request->all());

        return redirect('tipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = Tipo::findOrFail($id);
        $tipo->delete();

        return redirect('tipo');
    }

    /**
     * Validacion de Tipo
     *
     * @param Request $request
     */
    public function validando(Request $request){
        $this->validate($request, [
            'descripcion_tipo' => 'required|max:255'
        ], [
            'descripcion_tipo.required'=>'El nombre es requerido',
            'descripcion_tipo.max'=>'El nombre no puede ser mayor a 255 carateres'
        ]);
    }
}
