<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear tiposTratamiento</title>
</head>
<body>
    <h1>Crear tiposTratamiento</h1>

    {!! Form::open(['url'=>'/tiposTratamiento']) !!}
        
        {!! Form::label ('nombre','Nombre del tiposTratamiento') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del tiposTratamiento']) !!}
        <br />
        <br />
        {!! Form::label ('semestre','Semestre:') !!}
        {!! Form::number ('semestre', null,['placeholder'=>'Ingresa semestre del tiposTratamiento']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar tiposTratamiento') !!}
        {!! Form::close() !!}


</body>
</html>