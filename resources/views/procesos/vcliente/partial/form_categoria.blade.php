<link rel="stylesheet" type="text/css" href="{{ url('swg.css') }}">
<div class="dd" id="nestable-{{ $categoria->id}}">
    <ol class="dd-list ">
        <li class="dd-item dd-nodrag" data-id="10">
            <div class="dd-handle  dd-primary dd-categoria" style="
    background: rgba(158, 161, 163, 0.58);
    color: black;">{{ $categoria->descripcion_categoria }}
                <span class="pull-right fs11 fw600">
                        <button type="button" class="btn btn-default btn-xs ">
                            <i class="fa fa-plus-circle"></i>
                        </button>
                </span>
            </div>
            <!--                -->
            <ol class="dd-list pb15">
                <li class="dd-item"></li>
            </ol>
            <!-- -->
        </li>
    </ol>
</div>

<script>
    nlist = $('#nestable-{{ $categoria->id }}').nestable({
        group:{{ $categoria->id }},
        handleClass:'dd-nodrag',
    });

    nlist.nestable('collapseAll');
    omfp = $('#nestable-{{ $categoria->id }} > ol > li > div > span > button ').magnificPopup({
        items: {
            src: '{{ url('vcliente').'/'.$cliente_id.'/'.$categoria->id }}',
        },
        iframe: {
            markup:
            '<div style="width:400px; height:500px;">'+
            '<div class="mfp-iframe-scaler">' +
            '<div class="mfp-close"></div>' +
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
            '</div></div>'
        },
        type: 'iframe' // this overrides default type
    });

    mfp = $.magnificPopup.instance;

    function addSubMarca(categoria_id,marca_id){
        $.magnificPopup.close();
        $.post( '/vcliente/ajax',{ f:'getFormSubMarca',categoria:categoria_id, marca:marca_id}, function( data ) {
            $('#nestable-'+categoria_id+' > ol > li > div ').after(data);
        });
    }
</script>