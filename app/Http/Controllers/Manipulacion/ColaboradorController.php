<?php

namespace App\Http\Controllers\Manipulacion;

use App\Colaborador;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class ColaboradorController extends Controller
{
    public function data()
    {
        return Datatables::of(Colaborador::select('*'))->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manipulacion.colaborador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manipulacion.colaborador.create');
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

        Colaborador::create($request->all());
        return redirect('colaborador');
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
        $colaborador = Colaborador::findOrFail($id);
        return view('manipulacion.colaborador.edit',compact('colaborador'));
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

        $colaborador = Colaborador::findOrFail($id);
        $colaborador->update($request->all());

        return redirect('colaborador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        $colaborador->delete();

        return redirect('colaborador');
    }

    /**
     * Validacion de Colaborador
     *
     * @param Request $request
     */
    public function validando(Request $request){
        $this->validate($request, [
            'nombre' => 'required|max:100',
            'email' => 'required|email|max:255'
        ], [
            'nombre.required'=>'El nombre es requerido',
            'nombre.max'=>'El nombre no puede ser mayor a 100 carateres',
            'email.required'=>'El E-mail es requerido',
            'email.email'=>'El formato de E-mail es incorrecto',
            'email.max'=>'El E-mail no puede ser mayor a 255 carateres'
        ]);
    }
}
