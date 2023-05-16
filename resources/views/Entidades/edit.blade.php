<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Entidad</title>
</head>
<body>
    <h1>Editar Entidad</h1>

        {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/entidades/'.$entidad->id]) !!}
        
        {!! Form::label ('id_pais','Pais:') !!}
        {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , $entidad->clave_pais ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('nombre','Nombre de la entidad') !!}
        {!! Form::text ('nombre',$entidad->nombre,['placeholder'=>'Ingresa nombre de la entidad']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $entidad->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Editar Entidad') !!}
        {!! Form::close() !!}


</body>
</html>