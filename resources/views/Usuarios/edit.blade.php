<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar usuario</title>
</head>
<body>
    <h1>Editar usuario</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/usuario/'.$usuario->id]) !!}
        
        {!! Form::label ('id_tipo_usuario','material:') !!}
        {!! Form::select ('id_tipo_usuario', $usuario->pluck('nombre','id')->all() , $usuario->id_tipo_usuario,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_pais','Pais:') !!}
        {!! Form::select ('id_pais', $pais->pluck('nombre','id')->all() , $usuario->id_pais,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_municipio','Municipio:') !!}
        {!! Form::select ('id_municipio', $municipio->pluck('nombre','id')->all() , $usuario->id_municipio,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', $entidad->pluck('nombre','id')->all() , $usuario->id_entidad,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
   
        {!! Form::label ('nombre','nombre:') !!}
        {!! Form::select('nombre',$usuario->nombre,['placeholder'=>'Ingresa nombre del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('ap_pat','ap_pat:') !!}
        {!! Form::select('ap_pat',$usuario->ap_pat,['placeholder'=>'Ingresa nombre del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('ap_mat','ap_mat:') !!}
        {!! Form::select('ap_mat',$usuario->ap_mat,['placeholder'=>'Ingresa nombre del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('email','email:') !!}
        {!! Form::email('email',$usuario->costo,['placeholder'=>'Ingresa nombre del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('telefono','telefono:') !!}
        {!! Form::select('telefono',$usuario->telefono,['placeholder'=>'Ingresa nombre del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('username','username:') !!}
        {!! Form::select('username',$usuario->username,['placeholder'=>'Ingresa nombre del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('password','password:') !!}
        {!! Form::select('password',$usuario->password,['placeholder'=>'Ingresa nombre del usuario']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $usuario->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar usuario') !!}
        {!! Form::close() !!}


</body>
</html>