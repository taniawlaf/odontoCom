<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear clinicas</title>
</head>
<body>
    <h1>Crear clinica</h1>

    {!! Form::open(['url'=>'/cita']) !!}
        
        {!! Form::label ('id_pais','Pais:') !!}
        {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_municipio','Municipio:') !!}
        {!! Form::select ('id_municipio', $municipio->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('institucion','Institucion:') !!}
        {!! Form::text ('institucion',null,['placeholder'=>'Ingresa nombre del institucion']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('numero','Numero:') !!}
        {!! Form::number ('numero' , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        
        {!! Form::label ('nombre','Nombre:') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre de la clinica']) !!}
        <br />
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