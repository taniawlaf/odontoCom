<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Tratamiento</title>
</head>
<body>
    <h1>Crear Tratamiento</h1>

    {!! Form::open(['url'=>'/tratamiento']) !!}
       
    
        {!! Form::label ('nombre','Nombre del Tratamiento') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del Tratamiento']) !!}
        <br />
        <br />
        {!! Form::label ('precio','Precio:') !!}
        {!! Form::number ('precio', null,['placeholder'=>'Ingresa descripcion del Tratamiento']) !!}
        <br />
        <br />

        {!! Form::label ('descripcion','descripcion del Tratamiento') !!}
        {!! Form::text ('descripcion',null,['placeholder'=>'Ingresa descripcion del Tratamiento']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar Tratamiento') !!}
        {!! Form::close() !!}


</body>
</html>