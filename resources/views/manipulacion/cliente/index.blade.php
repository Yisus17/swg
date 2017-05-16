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
                            <span class="glyphicon glyphicon-tasks"></span>Cliente</div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="cliente-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Canal</th>
                            <th>Sub-Canal</th>
                            <th>Key-Account</th>
                            <th>Vendedor</th>
                            <th>Contácto</th>
                            <th>Teléfono</th>
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
        $('#cliente-table').DataTable({
            dom: 'rBfltip',
            iDisplayLength: 25,
            aLengthMenu: [[10, 25, 35, 50, 100, 500 -1], [10, 25, 35, 50, 100, 500, "Todos"]],
            processing: true,
            serverSide: true,
            select: 'single',
            ajax: '{!! url("cliente/data")!!}' ,
            rowId: 'id',
            columns: [
                { data: 'codigo', name: 'codigo' },
                { data: 'nombre', name: 'nombre' },
                { data: 'descripcion_canal', name: 'descripcion_canal' },
                { data: 'descripcion_subcanal', name: 'descripcion_subcanal' },
                { data: 'key_account_name', name: 'key_account_name' },
                { data: 'vendedor_name', name: 'vendedor_name' },
                { data: 'contacto', name: 'contacto' },
                { data: 'telefono', name: 'telefono' },

            ],

            buttons: [

                {
                    text: 'Nuevo',
                    action: function ( e, dt, node, config ) {
                        window.location.href='{!! url("cliente/create")!!}';
                    }
                },
                {
                    extend: 'selected',
                    text:'Editar',
                    action: function ( e, dt, node, config ) {
                        var idss,i;
                        idss = dt.rows('.selected').data();
                        i = idss[0]['id'];
                        window.location.href='{!! url("cliente")!!}/'+i+'/edit';
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
                            $('#form_delete').attr("action", '{!! url("cliente")!!}/' + i);
                            $('#form_delete').submit();
                        }
                    }
                },
            ]
        });

    });

</script>
@endpush