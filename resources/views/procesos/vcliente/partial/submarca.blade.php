    <ol class="dd-list pb15" id="ol{{ $marca->id }}">

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

<script>

    

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