@extends('layouts.app')


@section('content')
    <div class="tray tray-center">
        <div class="mw1000 center-block">
            <div class="admin-form">
                <div class="panel heading-border">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Sub-Categoriaes</div>
                    </div>
                    <div class="panel-body bg-light">
                    @include('errors.error')
                    {!! Form::model($subcategoria, ['method'=>'PATCH','route' => ['subcategoria.update', $subcategoria]]) !!}
                        @include('manipulacion.subcategoria.form',['submitName'=>'Guardar Cambios', 'categoriaes'=>$categoriaes])
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection