<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear material</title>
</head>
<body>
    <h1>Crear material</h1>

    {!! Form::open(['url'=>'/material']) !!}
        

        {!! Form::label ('nombre','Nombre del material') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del material']) !!}
        <br />
        <br />
        {!! Form::label ('descripcion','descripcioo del material') !!}
        {!! Form::text ('descripcion',null,['placeholder'=>'Ingresa descripcion del material']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar material') !!}
        {!! Form::close() !!}


</body>
</html>