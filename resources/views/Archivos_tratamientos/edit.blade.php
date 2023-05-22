@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/archivosTratamientos/'.$archivosTratamientos->id]) !!}
                
            <div class="form-group row mb-3">    
            {!! Form::label ('id_tratamiento','tratamiento:', ['class'=>'control-label']) !!}
            <div class= col-md-9>
                {!! Form::select ('id_tratamiento', $tratamiento->pluck('nombre','id')->all() , $archivosTratamientos->id_tratamiento,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
                    
        </div> 
        <br>
        <div class="form-group row mb-3">
            {!! Form::hidden ('ruta','archivos') !!}
        {!! Form::label ('archivo','Seleccionar foto',['class' => 'control-label']) !!}
        <div class= col-md-9>
        {!! Form::file ('archivo',null,['accept'=>'.jpg,.jpeg,.bmp,.png,.docx']) !!}
            </div>
        </div>
        <br />
        <div class="form-group row mb-3">        
        {!! Form::label ('status','Estatus:', ['class'=>'control-label']) !!}
        <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $archivosTratamientos->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
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