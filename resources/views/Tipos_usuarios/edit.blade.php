<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar tipos Usuario</title>
</head>
<body>
    <h1>Editar tipos Usuario</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/tiposUsuario/'.$tiposUsuario->id]) !!}
        
        {!! Form::label ('nombre','nombre:') !!}
        {!! Form::select('nombre',$tiposUsuario->nombre,['placeholder'=>'Ingresa nombre del tiposUsuario']) !!}
        <br />
        <br />
        {!! Form::label ('semestre','semestre:') !!}
        {!! Form::select('semestre',$tiposUsuario->semestre,['placeholder'=>'Ingresa nombre del tiposUsuario']) !!}
        <br />
        <br />
        
        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $tiposUsuario->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar tiposUsuario') !!}
        {!! Form::close() !!}


</body>
</html>