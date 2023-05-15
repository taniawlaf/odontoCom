<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear citas</title>
</head>
<body>
    <h1>Crear citas</h1>

    {!! Form::open(['url'=>'/cita']) !!}
        
        {!! Form::label ('id_usuario','Usuario:') !!}
        {!! Form::select ('id_usuario', $usuarios->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('id_tratamiento','Tratamiento:') !!}
        {!! Form::select ('id_tratamiento', $tratamientos->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('fecha','Fecha de la cita') !!}
        {!! Form::date ('fecha',null,['placeholder'=>'Ingresa fecha de la cita']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar citas') !!}
        {!! Form::close() !!}


</body>
</html>