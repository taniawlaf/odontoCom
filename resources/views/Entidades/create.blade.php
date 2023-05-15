<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Entidad</title>
</head>
<body>
    <h1>Crear Entidad</h1>

    {!! Form::open(['url'=>'/entidades']) !!}
        
        {!! Form::label ('id_pais','Pais:') !!}
        <!-- llave foranea -->
        {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('nombre','Nombre de la entidad') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre de la entidad']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar Entidad') !!}
        {!! Form::close() !!}


</body>
</html>
