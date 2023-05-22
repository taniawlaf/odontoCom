@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>

            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/tiposUsuario/'.$tiposUsuario->id]) !!}
                
            <div class="form-group row mb-3">    
                {!! Form::label ('nombre','nombre:') !!}
                <div class= col-md-9>
                {!! Form::text('nombre',$tiposUsuario->nombre,['placeholder'=>'Ingresa nombre del tiposUsuario','class'=>'form-control']) !!}
                </div>
            </div>
                <br />
                <br />
            <div class="form-group row mb-3">
                {!! Form::label ('nivel','nivel:') !!}
                <div class= col-md-9>
                {!! Form::text('nivel',$tiposUsuario->nivel,['placeholder'=>'Ingresa nombre del tiposUsuario','class'=>'form-control']) !!}
                </div>
            </div>
                <br />
                <br />
                
            <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:') !!}
                <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $tiposUsuario->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
            </div>
                
                <br />
                <br />
                <br>
            {!! Form::submit('Guardar tiposUsuario', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()