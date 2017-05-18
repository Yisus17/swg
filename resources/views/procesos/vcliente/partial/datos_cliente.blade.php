<link rel="stylesheet" type="text/css" href="{{ url('swg.css') }}">
<div class="row">
    <div class="col-md-6">
        <b>Canal:</b>  {{ $cliente->canal->descripcion_canal}}
    </div>
    <div class="col-md-6">
        <b>Sub-Canal:</b>  {{ $cliente->subcanal->descripcion_subcanal}}
    </div>

</div>

<div class="row">
    <div class="col-md-6">
        <b>Código:</b>  {{ $cliente->codigo}}
    </div>

    <div class="col-md-6">
        <b>Contácto:</b>  {{ $cliente->contacto}}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <b>Teléfono del Contácto:</b>  {{ $cliente->tel1}}
    </div>

    <div class="col-md-6">
        <b>Fecha de visita más reciente:</b>  {{ $cliente->visita_mas_reciente}}
    </div>



</div>

<div class="row">
    <div class="col-md-12">
        <b>Dirección:</b>  {{ $cliente->direccion}}
    </div>

</div>

<div class="row p15 no-side-padding">
    <div class="panel panel-visible">
        <div class="panel-heading">
            <div class="panel-title">Formulario</div>

        </div>
        <div class="panel-body" style="padding: 1rem;">
            <div class="row mt20">
                <div class="col-md-12 form-content">

                    {!! Form::open() !!}
                    <div class="bs-component">
                        <div class="form-group mb25" >
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label ">Categorías:</label>
                            <div class="col-lg-10 col-md-10 col-sm-12 categories">
                                <div class="bs-component">
                                    @foreach($categorias as $categoria)
                                        <div class="col-xs-12 col-sm-4 col-md-3">
                                            <label class="checkbox-inline mr10">
                                                <input id="categoria_{{ $categoria->id }}" class="check-categorias" value="{{ $categoria->id }}" type="checkbox">{{ $categoria->descripcion_categoria }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @foreach($categorias as $categoria)
                        <div class="form-group mbn">
                            <div id="formulario-categoria-{{ $categoria->id }}" class="col-xs-12 col-sm-12 col-md-12"></div>
                        </div>
                        @endforeach
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

<script type="text/javascript">
    var mfp, omfp;
    jQuery(document).ready(function() {
        $(".check-categorias").click(function () {
            var categoria_id;
            categoria_id = $(this).val();
            if ($(this).is(':checked')){
                $.post( '/vcliente/ajax',{ f:'getFormCategoria', categoria:categoria_id}, function( data ) {
                    $('#formulario-categoria-'+categoria_id).html(data);
                });
            }else{
                $('#formulario-categoria-'+categoria_id).html('');
            }
        });
    });
</script>

@endpush