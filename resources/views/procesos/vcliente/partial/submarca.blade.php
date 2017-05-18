
<!-- <ol class="dd-list pb15" id="ol{{ $marca->id }}">
        <li class="dd-item" >
            <div class="dd-handle">Marca: {{ $marca->descripcion_marca }}
                <span class="pull-right fs11 fw600">
                        <button type="button" id="btn_delete{{$marca->id}}" class="btn btn-default btn-xs ">
                            <i class="fa fa-trash-o"></i>
                        </button>
                </span>
            </div>
            <div class="dd-content">
                <div class="pb15 br-b">
                    <label class="control-label">SubMarca:</label>
                    {!! Form::select('submarcas'.$marca->id,$submarcas,null,['class'=>'form-control','id'=>'submarcas'.$marca->id,'style'=>'width:100%']) !!}
                </div>
                <div class="pb15 mt15 br-b">
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <label class="control-label">Disponible</label>
                                {!! Form::checkbox('disponible'.$marca->id,1,false,['class'=>'form-control','id'=>'disponbile'.$marca->id]) !!}</td>
                            <td align="center">
                                <label class="control-label">OOS</label>
                                {!! Form::checkbox('oos'.$marca->id,1,false,['class'=>'form-control','id'=>'oos'.$marca->id]) !!}
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p5">
                                <label class="control-label">Precio</label>
                                {!! Form::text('precio'.$marca->id,null,['class'=>'form-control','id'=>'precio'.$marca->id]) !!}</td>
                            <td align="center" class="p5">
                                <label class="control-label">Caras Disponibles</label>
                                {!! Form::text('caras'.$marca->id,null,['class'=>'form-control','id'=>'caras'.$marca->id]) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pb15 mt15 br-b">
                    <h4>Competencia:</h4>
                    <table width="100%">
                        <tr>
                            @foreach($marcascompetencias as $competencia )
                            <td align="center" class="p5">
                                <label class="control-label">{{$competencia->descripcion_producto}}</label>
                                {!! Form::text('precio'.$marca->id.'_'.$competencia->id,$competencia->precio,['class'=>'form-control','id'=>'precio'.$marca->id]) !!}</td>
                            @endforeach
                        </tr>
                    </table>
                </div>
                <div class="pb15 mt15 br-b">
                    <h4>Material Pop:</h4>
                    <table width="100%">
                        <tr>
                            @foreach($materialpop as $material )
                                <td align="center" class="p5">
                                    <label class="control-label">{{$material->descripcion_material_pop}}</label>
                                    {!! Form::checkbox('mp'.$marca->id.'_'.$material->id,1,false,['class'=>'form-control','id'=>'mp'.$marca->id.'_'.$material->id]) !!}
                            @endforeach
                        </tr>
                    </table>
                </div>
                <div class="pb15 mt15 br-b">
                    <h4>Punto de Conexión:</h4>
                    <table width="100%">
                        <tr>
                            @foreach($puntodeconexiones as $punto)
                                <td align="center" class="p5">
                                    <table>
                                        <tr>
                                            <td align="center">
                                                <label class="control-label">{{$punto->descripcion_punto}}</label>
                                                {!! Form::checkbox('punto'.$marca->id.'_'.$punto->id,1,false,['class'=>'form-control','id'=>'punto'.$marca->id.'_'.$punto->id]) !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <label class="control-label">¿Vestido?</label>
                                                {!! Form::checkbox('puntov'.$marca->id.'_'.$punto->id,1,false,['class'=>'form-control','id'=>'puntov'.$marca->id.'_'.$punto->id]) !!}
                                            </td>
                                        </tr>
                                    </table>
                            @endforeach
                        </tr>
                    </table>
                </div>
                <div class="mt15">
                    <span class="pull-right fs11 fw600">
                        <button type="button" class="btn btn-warning btn-xs ">
                            <i class="fa fa-warning"></i>
                        </button>
                    </span>
                    {!! Form::button('Grabar',['class'=>'btn btn-default','id'=>'btn_grabar'.$marca->id]) !!}
                </div>
            </div>
        </li>
    </ol> 
 -->
     <ol class="dd-list" id="ol{{ $marca->id }}" >
        <li class="dd-item" >
        <button id="mas" data-action="expand" type="button" style="display: block;">Expand</button>
        <button id="menos" data-action="collapse" type="button" style="display: none;">Collapse</button>
            <div class="dd-handle">Marca: {{ $marca->descripcion_marca }}
                <span class="pull-right fs11 fw600">
                        <button type="button" id="btn_delete{{$marca->id}}" class="btn btn-default btn-xs ">
                            <i class="fa fa-trash-o"></i>
                        </button>
                </span>
            </div>
            <div class="dd-content" id="dd-content">
             
                <form id="actividadSubmarca" method="post" action="{{url('vcliente/guardar_actividad_submarca')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="actividad" value="">
                    <div class=" br-b pb15 mt15">
                        <div class="form-group ">
                            <label class="control-label ">SubMarca:</label>
                            <select class="form-control" name="submarca">
                                @foreach ($submarcas as $key => $submarca)
                                    <option value="{{ $key }}">{{ $submarca }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label ">Disponibilidad :</label>
                        <input type="checkbox" name="disponible" value="1">
                    </div>

                    <div class="row br-b pb15 mt15">
                        <div class="col-lg-6 col-xs-12">
                            <div class="form-group">
                              <label for="precio">Precio:</label>
                              <input type="text" class="form-control" id="precio" name="precio_botella">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <div class="form-group">
                              <label for="caras">Caras Disponibles</label>
                              <input type="text" class="form-control" id="caras" name="numero_caras">
                            </div>
                        </div>
                    </div>

                    <h4>Competencias</h4><br>
                    
                    @foreach($marcascompetencias as $competencia )
                        <div class="row">
                            <div class="col-lg-3 col-xs-12">    
                                <div class="form-group label-center">
                                    <label class="control-label" >{{$competencia->descripcion_producto}}</label>
                                </div>
                            </div>
                            <div class="col-lg-9 col-xs-12 label-center">  
                                <div class="form-group">  
                                    <input type="text" class="form-control" id="marcascompetencias" name="competencia[{{$competencia->id}}]">
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <h4>Material Pop</h4><br>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                 <label class="checkbox-inline">
                                    <input type="checkbox" name="">Hablador
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox">Shelf Strip
                                </label>
                            </div>
                        </div>  
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox">Traffic Stopper
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox">Collarin
                                </label>
                            </div>
                        </div>  
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox">Leeflets
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox">Colgantes
                                </label>
                            </div>
                        </div>  
                    </div>

                    <div class="form-group">
                        <h4>Punto de Conexión</h4>
                        <select class="form-control visitaData" name="punto_conexion">
                            @foreach ($puntodeconexiones as $key => $punto)
                                <option value="{{ $punto->id }}">{{$punto->descripcion_punto}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">¿Punto de conexión vestido con arte de marca?</label>
                        <input type="checkbox" name="lleva_marca" value="1">
                    </div>

                    <div class="form-group">
                        <img id="uploadPreview" src= "{{ url('assets/img/default-image.png') }}" class="img-responsive" /></br></br>
                        <input type="file" id="fotoGondola" name="foto_gondola" class="form-control" accept="image/*" />
                    </div>

                    <div class="form-group">
                        <button type="submit" value="Grabar" id="btn_grabar{{$marca->id}}" class="btn btn-default">Grabar</button>
                    </div>
                </form>
            </div>
        </li>
    </ol>

<script>
    $("#fotoGondola").change(function() {
        if($(this).val()!=""){
            if ($(this)[0].files && $(this)[0].files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#uploadPreview').attr('src', e.target.result);
                }
                reader.readAsDataURL($(this)[0].files[0]);
            }
        }
    });

    $('#mas').click(function (){
        $('#dd-content').show();
        $('#menos').show();
        $('#mas').hide();
    });

    $('#menos').click(function (){
        $('#dd-content').hide();
        $('#menos').hide();
        $('#mas').show();
    });

    $('#btn_delete{{$marca->id}}').click(function (){
        if (confirm('¿Desea eliminar la sección de {{$marca->descripcion_marca}}?'))
            $('#ol{{$marca->id}}').remove();
    });

    $('#actividadSubmarca').submit(function (e){
        e.preventDefault();
        var data = new FormData(this);
        var url = $(this).attr( 'action' );
        
        /*var data = new FormData();

        $.each($('.visitaData', $(this) ), function(i, fileds){
            data.append($(fileds).attr('name'), $(fileds).val());
        });
        $.each($('input[type=file]', $(this) )[0].files, function (i, file) {
            data.append(file.name, file);
        });*/

        $.ajax({
            url:url,
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                if(parseInt(result) == 1){
                    alert("Los datos recolectados durante la visita se han guardado exitosamente");
                }else{
                    alert("Ha ocurrido un error");
                }
            }, 
        });
    });
</script>