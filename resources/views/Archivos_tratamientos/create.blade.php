@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Llenar campos</h4>
            <p class="sub-header">llena los campos y guarda tus cambios al dar clic en el boton</p>
            <br>
            <br>
            {!! Form::open(['url'=>'archivosTratamientos']) !!}
                
            <div class="form-group row mb-3">    
            {!! Form::label ('id_tratamiento','Tratamiento:',['class' => 'control-label']) !!}
            <div class= col-md-9>
                {!! Form::select ('id_tratamiento', $tratamiento->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
        
        <br>
        <div class="form-group row mb-3">
            {!! Form::label ('ruta','ruta del Tratamiento') !!}
            <div class= col-md-9>
                {!! Form::text ('ruta',null,['placeholder'=>'Ingresa ruta del Tratamiento','class'=>'form-control']) !!}
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
                <br />
                <br />
            {!! Form::submit('Guardar archivo', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()