<?php

namespace App\Http\Controllers\Manipulacion;

use App\Canal;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class CanalController extends Controller
{
    public function data()
    {
        return Datatables::of(Canal::select('*'))->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manipulacion.canal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manipulacion.canal.create');
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

        Canal::create($request->all());
        return redirect('canal');
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
        $canal = Canal::findOrFail($id);
        return view('manipulacion.canal.edit',compact('canal'));
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

        $canal = Canal::findOrFail($id);
        $canal->update($request->all());

        return redirect('canal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $canal = Canal::findOrFail($id);
        $canal->delete();

        return redirect('canal');
    }

    /**
     * Validacion de Canal
     *
     * @param Request $request
     */
    public function validando(Request $request){
        $this->validate($request, [
            'descripcion_canal' => 'required|max:255'
        ], [
            'descripcion_canal.required'=>'El nombre es requerido',
            'descripcion_canal.max'=>'El nombre no puede ser mayor a 255 carateres'
        ]);
    }
}
