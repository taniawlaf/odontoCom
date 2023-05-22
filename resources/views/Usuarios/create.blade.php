@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Llenar campos</h4>
            <p class="sub-header">llena los campos y guarda tus cambios al dar clic en el boton</p>
            <br>
            <br>
            {!! Form::open(['url'=>'/usuarios']) !!}
            <div class="form-group row mb-3">
                {!! Form::label ('id_pais','Pais:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
            </div>
                <br />
             <div class="form-group row mb-3">
                {!! Form::label ('id_entidad','Entidad:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('id_municipio','Municipio:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_municipio', $municipio->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('id_tipo_usuario','tipoUsuario:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_tipo_usuario', $tipoUsuario->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('nombre','Nombre del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('ap_pat','apellido paterno del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('ap_pat',null,['placeholder'=>'Ingresa apellido paterno del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('ap_mat','apellido materno del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('ap_mat',null,['placeholder'=>'Ingresa apellidomaterno del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('email','email del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::email ('email',null,['placeholder'=>'Ingresa nombre del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('telefono','telefono del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('telefono',null,['placeholder'=>'Ingresa nombre del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('username','username del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('username',null,['placeholder'=>'Ingresa username del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('password','password del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::password ('password',null,['placeholder'=>'Ingresa password del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('status', 
                        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
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