<div class="form-group">
    {!! Form::label('nombre','Nombre:') !!}
    {!! Form::text('nombre',null,['class'=>'form-control', 'maxlenght'=>'100']) !!}
</div>
<div class="form-group">
    {!! Form::label('cedula_id','Cédula / Id:') !!}
    {!! Form::text('cedula_id',null,['class'=>'form-control', 'maxlenght'=>'100']) !!}
</div>
<div class="form-group">
    {!! Form::label('telefono','Teléfono:') !!}
    {!! Form::text('telefono',null,['class'=>'form-control', 'maxlenght'=>'15']) !!}
</div>
<div class="form-group">
    {!! Form::label('email','Email:') !!}
    {!! Form::text('email',null,['class'=>'form-control', 'maxlenght'=>'255']) !!}
</div>



{!! Form::button('<< Regresar',['class'=>'btn btn-default','id'=>'btn_regresar']) !!}
{!! Form::submit($submitName,['class'=>'btn btn-primary']) !!}
{!! Form::reset('Reestablecer',['class'=>'btn btn-default']) !!}

@push('scripts')
<script>
    $(function() {
        $("#btn_regresar").click(function () {
            window.location.href='{!! url("colaborador")!!}';
        });
    });

</script>
@endpush