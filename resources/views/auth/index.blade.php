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
                            <span class="glyphicon glyphicon-tasks"></span>Usuarios</div>
                    </div>
                    <div class="panel-body pn">


                        <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="usuarios-table">
                            <thead>
                            <tr>
                                <th >Nombre</th>
                                <th >usuario</th>
                                <th >Email</th>
                                <th >Activo</th>

                            </tr>
                            </thead>
                        </table>
                        <p></p>
                        <div class="p15 bw3 br-greyer">


                        <ul class="nav nav-tabs" style="display: none;" id="usuario_tabs">
                            <li class="active"><a data-toggle="tab" href="#perfil">Perfil</a></li>

                        </ul>

                        <div class="tab-content" id="usuario_tabs_content" style="display: none;">
                            <div id="perfil" class="tab-pane fade in active">
                                <h3>Lista de Permisos para el Usuario: <span id="nombre_usuario"></span></h3>
                                <p></p>
                                <div class="panel panel-default"  id="panel_permisos">
                                    <div class="panel-heading">Permisos</div>
                                    <div class="panel-body">Cargando...</div>
                                </div>
                            </div>


                        </div>
                        </div>

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
        $.fn.dataTable.ext.errMode = 'none';
        var table = $('#usuarios-table').DataTable({
            dom: 'rBfltip',
            iDisplayLength: 25,
            aLengthMenu: [[10, 25, 35, 50, 100, 500 -1], [10, 25, 35, 50, 100, 500, "Todos"]],
            processing: true,
            serverSide: true,
            select: 'single',
            ajax: '{!! url("usuario/data") !!}' ,
            rowId: 'id',
            columns: [
                    { data: 'name', name: 'name' },
                    { data: 'username', name: 'username' },
                    { data: 'email', name: 'email' },
                    { data: 'active', name: 'active' }
            ],
            columnDefs: [
                {
                    render: function (data, type, row) {
                        return "<a href='mailto:"+data+"'>"+data+"</a>";
                    },
                    targets: 2
                },
                {
                    render: function (data, type, row) {
                        return (data === true) ? 'Si' : 'No';
                    },
                    targets: 3
                }
            ],
            buttons: [

                {
                    text: 'Nuevo',
                    action: function ( e, dt, node, config ) {
                        window.location.href='{!! url("usuario/create")!!}';
                    }
                },
                {
                    extend: 'selected',
                    text:'Editar',
                    action: function ( e, dt, node, config ) {
                        var idss,i;
                        idss = dt.rows('.selected').data();
                        i = idss[0]['id'];
                        window.location.href='{!! url("usuario")!!}/'+i+'/edit';
                    }
                },
                {
                    extend: 'selected',
                    text:'Eliminar',
                    action: function ( e, dt, node, config ) {
                        var idss,i;
                        idss = dt.rows('.selected').data();
                        i = idss[0]['id'];
                        if (i != {!! Auth::user()->id !!} )
                        {
                            if (confirm('¿Desea eliminar la fila seleccionada?')){
                                $('#form_delete').attr("action", "{!! url('usuario')!!}/" + i);
                                $('#form_delete').submit();
                            }
                        }else{
                            alert('Usted no puede eliminar su propio usuario.');
                        }
                    }
                },
            ]
        });


        table.on( 'select', function ( e, dt, type, indexes ) {
            if ( type === 'row' ) {
                var data = table.rows( indexes ).data();

                var id = data.pluck( 'id' );
                id = id[0];

                var nombre = data.pluck('name');
                nombre = nombre[0];
                $('#nombre_usuario').html(nombre);


                $('#usuario_tabs').show();
                $('#usuario_tabs_content').show();
                $('#panel_permisos .panel-body').load("{!! url('usuario')!!}/" + id+'/perfil', function (responseText, textStatus) {
                    if (textStatus === 'success' || textStatus === 'notmodified') {

                        $("input:checkbox").click(function() {
                            $(this).parent().find("input:checkbox").prop("checked", this.checked);
                        });
                        formPerfilSubmit(id);
                        $('a[href="#perfil"]').tab('show')
                    }
                });


            }
        } );
        table.on( 'deselect', function ( e, dt, type, indexes ) {
            if ( type === 'row' ) {
                $('#usuario_tabs').hide();
                $('#usuario_tabs_content').hide();
            }
        } );
        table.on( 'error.dt', function ( e, settings, techNote, message ) {
            alert( 'An error has been reported by DataTables: ', message );
        });


    });
    function formPerfilSubmit(user_id){
        $("#form_perfil").submit(function (e) {
            e.preventDefault();
            var _token = $('input[name=_token]').val();
            $.post( $(this).attr( 'action' ), $(this).serialize() )
                    .fail(function(data){
                        var strError = "";
                        $.each( data.responseJSON, function( key, val ) {
                            strError = strError + val + "\r\n";
                        });
                        alert(strError);
                    })
                    .done(function(){
                        alert('Los datos han sido grabados satisfactoriamente.')
                    });
        });
    }

</script>
@endpush