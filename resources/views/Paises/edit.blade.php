<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Pais</title>
</head>
<body>
    <h1>Editar pais</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/paises/'.$pais->id]) !!}
        {!! Form::label ('nombre','Nombre del pais') !!}
        {!! Form::text ('nombre',$pais->nombre,['placeholder'=>'Ingresa nombre del pais']) !!}
        <br />
        <br />

        {!! Form::label ('id','id del pais') !!}
        {!! Form::text ('id',$pais->clave,['placeholder'=>'Ingresa clave del pais']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $pais->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Editar Pais') !!}
        {!! Form::close() !!}


</body>
</html>

