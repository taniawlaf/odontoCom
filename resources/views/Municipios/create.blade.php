<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Municipio</title>
</head>
<body>
    <h1>Crear Municipio</h1>

    {!! Form::open(['url'=>'/municipios']) !!}
        
        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('nombre','Nombre del municipio') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del municipio']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar Municipio') !!}
        {!! Form::close() !!}


</body>
</html>
