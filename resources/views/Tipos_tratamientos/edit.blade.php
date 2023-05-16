<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar tipos Tratamientos</title>
</head>
<body>
    <h1>Editar tipos Tratamientos</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/tiposTratamientos/'.$tiposTratamientos->id]) !!}
        
        {!! Form::label ('nombre','nombre:') !!}
        {!! Form::select('nombre',$tiposTratamientos->nombre,['placeholder'=>'Ingresa nombre del tiposTratamientos']) !!}
        <br />
        <br />
        {!! Form::label ('semestre','semestre:') !!}
        {!! Form::select('semestre',$tiposTratamientos->semestre,['placeholder'=>'Ingresa nombre del tiposTratamientos']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $tiposTratamientos->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar tipos Tratamientos') !!}
        {!! Form::close() !!}


</body>
</html>