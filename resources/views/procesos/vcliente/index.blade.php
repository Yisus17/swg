@extends('layouts.app')

@push('csss')

<!-- Nestable CSS -->
<link rel="stylesheet" type="text/css" href="{{ url('theme/vendor/plugins/nestable/nestable.css') }}">
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="{{ url('theme/vendor/plugins/magnific/magnific-popup.css') }}">
<!-- Select 2 core CSS file -->
<link rel="stylesheet" type="text/css" href="{{ url('theme/vendor/plugins/select2/css/core.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('swg.css') }}">
<style>
    .mfp-iframe-holder .mfp-content{
        width:100%;
    }
    .mfp-iframe-scaler iframe {
        background-color: white;
    }
.dd-categoria{
    background: rgba(158, 161, 163, 0.58);
    color: black;
}
</style>

@endpush

@section('content')
<style type="text/css">
    @media screen and (max-width: 420px) {
    .no-side-padding {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
}

</style>
    <div class="tray tray-center no-side-padding">
        <div class="row">
            <div class="col-md-12 no-side-padding">
                <div class="panel panel-visible">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span class="glyphicon glyphicon-tasks"></span>Visita a cliente:  {{ $cliente->descripcion_cliente }}</div>
                    </div>
                    <div class="panel-body pn">
                        <div class="row mt20">
                            <div class="col-md-12 p25">
                                @include('procesos.vcliente.partial.datos_cliente')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@push('scripts')

<script src="{{ url('theme/vendor/plugins/select2/select2.min.js') }}"></script>

<script src="{{ url('theme/vendor/plugins/nestable/jquery.nestable.js') }}"></script>

<script src="{{ url('theme/vendor/plugins/magnific/jquery.magnific-popup.min.js')}}"></script>



@endpush