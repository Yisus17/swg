<li class="p5">
    {!! Form::checkbox('perfil[]', $accion['id'], $accion['checked'], ['id' => 'perfil_'.$accion['id']]) !!}
    {!! Form::label('perfil_'.$accion['id'],$accion['nombre']) !!}
    @if(count ($accion['hijos'])>0)
        <ul style="list-style: none" >
            @each('auth.perfiltree',$accion['hijos'],'accion')
        </ul>
    @endif
</li>
