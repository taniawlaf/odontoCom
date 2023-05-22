@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Llenar campos</h4>
            <p class="sub-header">llena los campos y guarda tus cambios al dar clic en el boton</p>
            <br>
            <br>
            {!! Form::open(['url'=>'/tratamiento']) !!}
        
            <div class="form-group row mb-3">
                {!! Form::label ('id_tipo_tratamiento','Tipo tratamiento:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_tipo_tratamiento', $tiposTratamiento->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
            </div>
                <br />
            
            <div class="form-group row mb-3">        
                {!! Form::label ('nombre','Nombre del Tratamiento') !!}
                <div class= col-md-9>
                    {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del Tratamiento','class'=>'form-control']) !!}
                </div>
                            
            </div> 
           
            <br>
            <div class="form-group row mb-3">
                {!! Form::label ('costo','Costo:') !!}
                <div class= col-md-9>
                    {!! Form::number ('costo', null,['placeholder'=>'Ingresa precio del Tratamiento','class'=>'form-control']) !!}
                </div>
                            
            </div> 
            <br>

            <div class="form-group row mb-3">
                {!! Form::label ('descripcion','descripcion del Tratamiento') !!}
                <div class= col-md-9>
                    {!! Form::text ('descripcion',null,['placeholder'=>'Ingresa descripcion del Tratamiento','class'=>'form-control']) !!}
                </div>
                            
            </div> 
            <br>

            <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:') !!}
                <div class= col-md-9>
                    {!! Form::select ('status', 
                    array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                            
                </div> 
                <br>
                <br>
                <br>  
            {!! Form::submit('Guardar tratamiento', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()