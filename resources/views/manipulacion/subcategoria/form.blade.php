<div class="form-group">
    {!! Form::label('categoria_id','Categorias:') !!}
    {!! Form::select('categoria_id',$categorias,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion_subcategoria','Descripción:') !!}
    {!! Form::text('descripcion_subcategoria',null,['class'=>'form-control', 'maxlenght'=>'100']) !!}
</div>

{!! Form::button('<< Regresar',['class'=>'btn btn-default','id'=>'btn_regresar']) !!}
{!! Form::submit($submitName,['class'=>'btn btn-primary']) !!}
{!! Form::reset('Reestablecer',['class'=>'btn btn-default']) !!}

@push('scripts')
<script>
    $(function() {
        $("#btn_regresar").click(function () {
            window.location.href='{!! url("subcategoria")!!}';
        });
    });

</script>
@endpush