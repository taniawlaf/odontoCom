<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear TiposUsuario</title>
</head>
<body>
    <h1>Crear TiposUsuario</h1>

    {!! Form::open(['url'=>'/tiposUsuario']) !!}
       
    
        {!! Form::label ('nombre','Nombre del TiposUsuario') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del TiposUsuario']) !!}
        <br />
        <br />
        {!! Form::label ('nivel','Nivel:') !!}
        {!! Form::number ('nivel', null,['placeholder'=>'Ingresa nivel del TiposUsuario']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar TiposUsuario') !!}
        {!! Form::close() !!}


</body>
</html>