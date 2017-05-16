@extends('layouts.app')

@section('content')
    <div class="tray tray-center">
        <div class="mw1000 center-block">
            <div class="admin-form">
                <div class="panel heading-border">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Sub-Tipos</div>
                    </div>
                    <div class="panel-body bg-light">
                        @include('errors.error')
                        {!! Form::open(['url'=>'subtipo']) !!}
                            @include('manipulacion.subtipo.form',['submitName'=>'Guardar', 'tipos'=>$tipos])
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
