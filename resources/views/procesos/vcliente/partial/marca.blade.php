@extends('layouts.modal')

@push('csss')

<!-- Select 2 core CSS file -->

<link rel="stylesheet" type="text/css" href="{{ url('theme/vendor/plugins/select2/css/core.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('swg.css') }}">


@endpush

@section('content')

    <div class="panel panel-visible">

        <div class="panel-heading">

            <div class="panel-title">

                <span class="glyphicon glyphicon-tasks"></span>{{ $categoria->descripcion_categoria }}</div>

        </div>

        <div class="panel-body pn">

            <div class="row mt20">

                <div class="col-md-12 p25">

                    <form id="admin-form" method="post" action="/" novalidate="novalidate">
                        <div class="form-group">
                            {!! Form::label('select', 'País:', ['class' => 'col-lg-2 control-label'] )  !!}
                            <div class="col-lg-10">
                                {!!  Form::select('paises', $paises , null, ['class'=>'form-control ',  'id'=>'paises']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('select', 'Marca:', ['class' => 'col-lg-2 control-label'] )  !!}
                            <div class="col-lg-10">
                                {!!  Form::select('marcas', $marcas , null, ['class'=>'form-control','id'=>'marcas','required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::button('Adicionar',['class'=>'btn btn-default','id'=>'btn_seleccionar']) !!}
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection

@push('scripts')


<script type="text/javascript">
    jQuery(document).ready(function() {
        var categoria_id = {{ $categoria->id }};
        $('#paises').change(function () {
            var pais_id = $(this).val();
            $.post('/vcliente/ajax', {
                f: 'getMarcaPorCategoriaPais',
                categoria: categoria_id,
                pais: pais_id
            }, function (data) {
                $('#marcas').find('option').remove();
                $.each(data, function (key, value) {
                    $('#marcas').append('<option value=' + key + '>' + value + '</option>');
                });
                
            });
        });
    
        $('#btn_seleccionar').click(function () {
            var marca_id;
            marca_id = $('#marcas').val();
            parent.addSubMarca(categoria_id,marca_id);
        });
    });

</script>

@endpush