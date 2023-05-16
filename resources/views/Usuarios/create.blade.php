<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>

    {!! Form::open(['url'=>'/usuarios']) !!}
       
        {!! Form::label ('id_pais','Pais:') !!}
        {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_municipio','Municipio:') !!}
        {!! Form::select ('id_municipio', $municipio->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_tipo_usuario','tipoUsuario:') !!}
        {!! Form::select ('id_tipo_usuario', $tipoUsuario->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('nombre','Nombre del Usuario') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del Usuario']) !!}
        <br />
        <br />
        {!! Form::label ('ap_pat','apellido paterno del Usuario') !!}
        {!! Form::text ('ap_pat',null,['placeholder'=>'Ingresa apellido paterno del Usuario']) !!}
        <br />
        <br />
        {!! Form::label ('ap_mat','apellido materno del Usuario') !!}
        {!! Form::text ('ap_mat',null,['placeholder'=>'Ingresa apellidomaterno del Usuario']) !!}
        <br />
        <br />

        {!! Form::label ('email','email del Usuario') !!}
        {!! Form::email ('email',null,['placeholder'=>'Ingresa nombre del TiposUsuario']) !!}
        <br />
        <br />

        {!! Form::label ('telefono','telefono del Usuario') !!}
        {!! Form::text ('telefono',null,['placeholder'=>'Ingresa nombre del TiposUsuario']) !!}
        <br />
        <br />

        {!! Form::label ('username','username del Usuario') !!}
        {!! Form::text ('username',null,['placeholder'=>'Ingresa username del TiposUsuario']) !!}
        <br />
        <br />

        {!! Form::label ('password','password del Usuario') !!}
        {!! Form::password ('password',null,['placeholder'=>'Ingresa password del TiposUsuario']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar Usuario') !!}
        {!! Form::close() !!}


</body>
</html>