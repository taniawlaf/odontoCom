<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar inventarios</title>
</head>
<body>
    <h1>Editar inventarios</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/inventarios/'.$inventarios->id]) !!}
        
        {!! Form::label ('id_material','material:') !!}
        {!! Form::select ('id_material', $tratamiento->pluck('nombre','id')->all() , $inventarios->id_material,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_usuario','usuario:') !!}
        {!! Form::select ('id_usuario', $usuario->pluck('nombre','id')->all() , $inventarios->id_usuario,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('existencia','existencia:') !!}
        {!! Form::select('existencia',$inventarios->existencia,['placeholder'=>'Ingresa nombre del inventarios']) !!}
        <br />
        <br />
        {!! Form::label ('stock','stock:') !!}
        {!! Form::select('stock',$inventarios->stock,['placeholder'=>'Ingresa nombre del inventarios']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $inventarios->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar inventarios') !!}
        {!! Form::close() !!}


</body>
</html>