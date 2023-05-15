<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Pais</title>
</head>
<body>
    <h1>Crear pais</h1>

    {!! Form::open(['url'=>'/paises']) !!}
        {!! Form::label ('nombre','Nombre del pais') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del pais']) !!}
        <br />
        <br />

        {!! Form::label ('clave','Clave del pais') !!}
        {!! Form::text ('clave',null,['placeholder'=>'Ingresa clave del pais']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar Pais') !!}
        {!! Form::close() !!}


</body>
</html>
