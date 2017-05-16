@extends('layouts.app')

@push('csss')
    @include('manipulacion.datatable-css');
@endpush

@section('content')
    {!! Form::open(['method' => 'DELETE', 'id'=>'form_delete','style'=>'display:none']) !!}
    {!! Form::close() !!}
    <div class="tray tray-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Tipo</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline"" id="tipo-table" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th >Descripción</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop
@push('scripts')

@include('manipulacion.datatable-js')



<script>
    $(function() {
        $('#tipo-table').DataTable({
            dom: 'rBfltip',
            iDisplayLength: 25,
            aLengthMenu: [[10, 25, 35, 50, 100, 500 -1], [10, 25, 35, 50, 100, 500, "Todos"]],
            processing: true,
            serverSide: true,
            select: 'single',
            ajax: '{!! url("tipo/data")!!}' ,
            rowId: 'id',
            columns: [
                { data: 'descripcion_tipo', name: 'descripcion_tipo' }
            ],

            buttons: [

                {
                    text: 'Nuevo',
                    action: function ( e, dt, node, config ) {
                        window.location.href='{!! url("tipo/create")!!}';
                    }
                },
                {
                    extend: 'selected',
                    text:'Editar',
                    action: function ( e, dt, node, config ) {
                        var idss,i;
                        idss = dt.rows('.selected').data();
                        i = idss[0]['id'];
                        window.location.href='{!! url("tipo")!!}/'+i+'/edit';
                    }
                },
                {
                    extend: 'selected',
                    text:'Eliminar',
                    action: function ( e, dt, node, config ) {
                        var idss,i;
                        idss = dt.rows('.selected').data();
                        i = idss[0]['id'];
                        if (confirm('¿Desea eliminar la fila seleccionada?')){
                            $('#form_delete').attr("action", '{!! url("tipo")!!}/' + i);
                            $('#form_delete').submit();
                        }
                    }
                },
            ]
        });

    });

</script>
@endpush