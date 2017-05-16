<div class="form-group">
    {!! Form::label('tipo_id','Tipos:') !!}
    {!! Form::select('tipo_id',$tipos,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion_subtipo','Descripción:') !!}
    {!! Form::text('descripcion_subtipo',null,['class'=>'form-control', 'maxlenght'=>'100']) !!}
</div>

{!! Form::button('<< Regresar',['class'=>'btn btn-default','id'=>'btn_regresar']) !!}
{!! Form::submit($submitName,['class'=>'btn btn-primary']) !!}
{!! Form::reset('Reestablecer',['class'=>'btn btn-default']) !!}

@push('scripts')
<script>
    $(function() {
        $("#btn_regresar").click(function () {
            window.location.href='{!! url("subtipo")!!}';
        });
    });

</script>
@endpush