@extends('layouts.app')

@section('content')
    <div class="tray tray-center">
        <div class="mw1000 center-block">
            <div class="admin-form">
                <div class="panel heading-border">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Colaborador</div>
                    </div>
                    <div class="panel-body bg-light">
                        @include('errors.error')
                        {!! Form::open(['url'=>'colaborador']) !!}
                            @include('manipulacion.colaborador.form',['submitName'=>'Guardar'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
