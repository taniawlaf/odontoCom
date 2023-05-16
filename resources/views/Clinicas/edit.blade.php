<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar clinicas</title>
</head>
<body>
    <h1>Editar clinicas</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/clinicas/'.$clinicas->id]) !!}
        
        {!! Form::label ('id_pais','Pais:') !!}
        {!! Form::select ('id_pais', $pais->pluck('nombre','id')->all() , $clinicas->id_pais,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_municipio','Municipio:') !!}
        {!! Form::select ('id_municipio', $municipio->pluck('nombre','id')->all() , $clinicas->id_municipio,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', $entidad->pluck('nombre','id')->all() , $clinicas->id_entidad,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
   

        {!! Form::label ('institucion','Institucion:') !!}
        {!! Form::select('institucion',$clinicas->institucion,['placeholder'=>'Ingresa nombre del clinicas']) !!}
        <br />
        <br />
        {!! Form::label ('nombre','Nombre:') !!}
        {!! Form::select('nombre',$clinicas->institucion,['placeholder'=>'Ingresa nombre del clinicas']) !!}
        <br />
        <br />

        {!! Form::label ('numero','Numero:') !!}
        {!! Form::select('numero',$clinicas->numero,['placeholder'=>'Ingresa nombre del clinicas']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $clinicas->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar clinicas') !!}
        {!! Form::close() !!}


</body>
</html>