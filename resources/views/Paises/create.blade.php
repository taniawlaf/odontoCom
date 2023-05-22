@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Llenar campos</h4>
            <p class="sub-header">llena los campos y guarda tus cambios al dar clic en el boton</p>
            <br>
            <br>
            {!! Form::open(['url'=>'/paises']) !!}
            <div class="form-group row mb-3">    
                {!! Form::label ('nombre','Nombre del pais',['class' => 'control-label']) !!}
                 <div class= col-md-9>
                    {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del pais','class'=>'form-control']) !!}
                </div>
            </div>
            
            <br>

            <div class="form-group row mb-3">    
                {!! Form::label ('clave','Clave del pais',['class' => 'control-label']) !!}
                 <div class= col-md-9>
                    {!! Form::text ('clave',null,['placeholder'=>'Ingresa clave del pais','class'=>'form-control']) !!}
                </div>
            </div>
            
            <br>

            <div class="form-group row mb-3">    
                {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                 <div class= col-md-9>
                    {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
              </div>
            </div>
            
            <br>
            {!! Form::submit('Guardar Pais', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()