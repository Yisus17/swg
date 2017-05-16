
{!! Form::open(['url'=>url('usuario').'/'.$user_id.'/perfil','id'=>'form_perfil']) !!}
<!--<ul style="list-style: none">
    <li>
        {!! Form::checkbox('todos', 0, false, ['id' => 'todos']) !!}
        {!! Form::label('todos','Todos') !!}-->
        <ul style="list-style: none; display: flex" class="p5">
            @each('auth.perfiltree',$acciones,'accion')
        </ul><!--
    </li>
</ul>-->
{!! Form::submit('Grabar',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}
