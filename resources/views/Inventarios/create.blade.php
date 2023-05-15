<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Inventario</title>
</head>
<body>
    <h1>Crear Inventario</h1>

    {!! Form::open(['url'=>'/inventario']) !!}
        
        {!! Form::label ('id_material','Material:') !!}
        {!! Form::select ('id_material', $materiales->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_usuario','Usuario:') !!}
        {!! Form::select ('id_usuario', $usuarios->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />

        {!! Form::label ('existencia','numero de existencias') !!}
        {!! Form::number ('existencia',null,['placeholder'=>'Ingresa existencias']) !!}
        <br />
        <br />

        {!! Form::label ('stock','cantidad de stock') !!}
        {!! Form::number ('stock',null,['placeholder'=>'Ingresa stock']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar Inventario') !!}
        {!! Form::close() !!}


</body>
</html>