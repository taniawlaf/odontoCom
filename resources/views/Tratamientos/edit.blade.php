<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar tratamiento</title>
</head>
<body>
    <h1>Editar tratamiento</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/tratamiento/'.$tratamiento->id]) !!}
        
        {!! Form::label ('id_tipo_tratamiento','material:') !!}
        {!! Form::select ('id_tipo_tratamiento', $tratamiento->pluck('nombre','id')->all() , $tratamiento->id_tipo_tratamiento,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        
        {!! Form::label ('nombre','nombre:') !!}
        {!! Form::select('nombre',$tratamiento->nombre,['placeholder'=>'Ingresa nombre del tratamiento']) !!}
        <br />
        <br />
        {!! Form::label ('costo','costo:') !!}
        {!! Form::select('costo',$tratamiento->costo,['placeholder'=>'Ingresa nombre del tratamiento']) !!}
        <br />
        <br />
        {!! Form::label ('descripcion','descripcion:') !!}
        {!! Form::select('descripcion',$tratamiento->descripcion,['placeholder'=>'Ingresa nombre del tratamiento']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $tratamiento->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar tratamiento') !!}
        {!! Form::close() !!}


</body>
</html>