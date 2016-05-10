<html>

    {!! Form::open(array('url' => 'users/save')) !!}
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre') }}
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <br>

    {{ Form::submit('Guardar') }}
    {!! Form::close() !!}    


</html>