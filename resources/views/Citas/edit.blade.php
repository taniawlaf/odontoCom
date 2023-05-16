<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar citas</title>
</head>
<body>
    <h1>Editar citas</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/citas/'.$citas->id]) !!}
        
        {!! Form::label ('id_tratamiento','tratamiento:') !!}
        {!! Form::select ('id_trataminto', $tratamiento->pluck('nombre','id')->all() , $citas->id_tratamiento,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_usuario','usuario:') !!}
        {!! Form::select ('id_usuario', $usuario->pluck('nombre','id')->all() , $citas->id_usuario,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('fecha','fecha:') !!}
        {!! Form::date('fecha',$citas->fecha,['placeholder'=>'Ingresa nombre del citas']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $citas->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar citas') !!}
        {!! Form::close() !!}


</body>
</html>