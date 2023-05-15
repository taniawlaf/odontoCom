<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear consultorio</title>
</head>
<body>
    <h1>Crear consultorio</h1>

    {!! Form::open(['url'=>'/consultorios']) !!}
        
        {!! Form::label ('id_usuario','Usuario:') !!}
        {!! Form::select ('id_usuario', $usuario->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_clinica','Clinica:') !!}
        {!! Form::select ('id_clinica', $clinica->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar consultorio') !!}
        {!! Form::close() !!}


</body>
</html>