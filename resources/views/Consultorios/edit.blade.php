<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar consultorio</title>
</head>
<body>
    <h1>Editar consultorio</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/consultorio/'.$consultorio->id]) !!}
        
        {!! Form::label ('id_usuario','Usuario:') !!}
        {!! Form::select ('id_usuario', $usauario->pluck('nombre','id')->all() , $consultorio->id_usuario,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_clinica','Clinica:') !!}
        {!! Form::select ('id_clinica', $clinica->pluck('nombre','id')->all() , $consultorio->id_clinica,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $citas->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar consultorio') !!}
        {!! Form::close() !!}


</body>
</html>