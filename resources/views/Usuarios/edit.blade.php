@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/usuarios/'.$usuario->id]) !!}
                <div class="form-group row mb-3">
                    {!! Form::label ('tipoUsuario','Tipo:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('tipoUsuario', $tipoUsuario->pluck('nombre','id')->all() , $usuario->tipoUsuario,['placeholder'=>'Seleccionar ...' ,'class'=>'btn-outline-info']) !!}
                    </div>
                </div>
                <br />
                
                <div class="form-group row mb-3">
                    {!! Form::label ('paises','Pais:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('paises', $paises->pluck('nombre','id')->all() , $usuario->id_pais,['placeholder'=>'Seleccionar ...' ,'class'=>'btn-outline-info']) !!}
                    </div>
                </div>
            
                <div class="form-group row mb-3">
                    {!! Form::label ('id_entidad','Entidad:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() , $usuario->id_entidad,['class'=>'btn-outline-info','placeholder'=>'Seleccionar ...']) !!}
                    </div>
                </div>
                <br />

                
                <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('id_municipio','Municipio:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('id_municipio', $municipio->pluck('nombre','id')->all(), $usuario->id_municipio,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                </div>
                <br>
                    
                    
                <div class="form-group row mb-3">
                    {!! Form::label ('nombre','nombre:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text('nombre',$usuario->nombre,['placeholder'=>'Ingresa nombre del usuario','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('ap_pat','ap_pat:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text('ap_pat',$usuario->ap_pat,['placeholder'=>'Ingresa nombre del usuario','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('ap_mat','ap_mat:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text('ap_mat',$usuario->ap_mat,['placeholder'=>'Ingresa nombre del usuario','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('email','email:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::email('email',$usuario->email,['placeholder'=>'Ingresa correo del usuario','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('telefono','telefono:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text('telefono',$usuario->telefono,['placeholder'=>'Ingresa telefono del usuario','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('username','username:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text('username',$usuario->username,['placeholder'=>'Ingresa username del usuario','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                    
                <div class="form-group row mb-3">
                    {!! Form::label ('password','password:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text('password',$usuario->password,['placeholder'=>'Ingresa password del usuario','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('status','Estatus:', ['class'=>'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'), $usuario->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                    
                </div> 
                <br>
                <br>
                <br>  
            {!! Form::submit('Guardar usuario', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()