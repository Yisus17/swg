
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
                <form>
                    <div class=" br-b pb15 mt15">
                        <div class="form-group ">
                            <label class="control-label ">SubMarca:</label>
                            <select class="form-control">
                                @foreach ($submarcas as $key => $submarca)
                                    <option value="{{ $key }}">{{ $submarca }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Disponibilidad :</label>
                        <input type="checkbox" name="disponible">
                    </div>

                    <div class="row br-b pb15 mt15">
                        <div class="col-lg-6 col-xs-12">
                            <div class="form-group">
                              <label for="precio">Precio:</label>
                              <input type="text" class="form-control" id="precio">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <div class="form-group">
                              <label for="caras">Caras Disponibles</label>
                              <input type="text" class="form-control" id="caras">
                            </div>
                        </div>
                    </div>

                    <h4>Competencias</h4><br>
                    
                    @foreach($marcascompetencias as $competencia )
                        <div class="row">
                            <div class="col-lg-3 col-xs-12">    
                                <div class="form-group label-center">
                                    <label class="control-label">{{$competencia->descripcion_producto}}</label>
                                </div>
                            </div>
                            <div class="col-lg-9 col-xs-12 label-center">  
                                <div class="form-group">  
                                    <input type="text" class="form-control" id="marcascompetencias" placeholder="Precio">
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <h4>Material Pop</h4><br>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                 <label class="checkbox-inline">
                                    <input type="checkbox">Hablador
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
                        <select class="form-control">
                            @foreach ($puntodeconexiones as $key => $punto)
                                <option value="{{ $key }}">{{$punto->descripcion_punto}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">¿Vestido?</label>
                        <input type="checkbox" name="vestido">
                    </div>

                    <div class="form-group">
                        <img id="uploadPreview" src= "{{ url('assets/img/default-image.png') }}" class="img-responsive" /></br></br>
                        <input type="file" id="banner" name="banner" class="form-control" accept="image/*" />
                    </div>
                {!! Form::button('Grabar',['class'=>'btn btn-default','id'=>'btn_grabar'.$marca->id]) !!}
                </form>
            </div>
        </li>
    </ol>
<script>
    $("#banner").change(function() {
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

    $('#btn_grabar{{$marca->id}}').click(function (){
        if (confirm('Los datos se han grabado satisfactoriamente ¿Desea adicionar una nueva marca?')){
            omfp.magnificPopup('open'); // Will open the popup
        }
    });
</script>