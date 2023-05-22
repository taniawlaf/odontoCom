@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Llenar campos</h4>
            <p class="sub-header">llena los campos y guarda tus cambios al dar clic en el boton</p>
            <br>
            <br>
            {!! Form::open(['url'=>'/consultorios']) !!}
                
             <div class="form-group row mb-3">    
            {!! Form::label ('id_usuario','Usuario:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_usuario', $usuario->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
        
        <br>
         <div class="form-group row mb-3">        
        {!! Form::label ('id_clinica','Clinica:',['class' => 'control-label']) !!}
            <div class= col-md-9>
                {!! Form::select ('id_clinica', $clinica->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
        
        <br>
                
                <div class="form-group row mb-3">
            {!! Form::label ('numero','numero del Usuario',['class' => 'control-label'],['class' => 'control-label']) !!}
                <div class= col-md-9>
            
            {!! Form::number ('numero',null,['placeholder'=>'Ingresa numero del TiposUsuario','class'=>'form-control']) !!}
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
                <br />
                <br />
            {!! Form::submit('Guardar consultorio', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()