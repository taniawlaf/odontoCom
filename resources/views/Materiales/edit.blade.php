<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar material</title>
</head>
<body>
    <h1>Editar material</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/material/'.$material->id]) !!}

        {!! Form::label ('nombre','nombre:') !!}
        {!! Form::select('nombre',$material->nombre,['placeholder'=>'Ingresa nombre del material']) !!}
        <br />
        <br />
        {!! Form::label ('descripcion','descripcion:') !!}
        {!! Form::select('descripcion',$material->descripcion,['placeholder'=>'Ingresa nombre del material']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $material->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar material') !!}
        {!! Form::close() !!}


</body>
</html>