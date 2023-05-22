@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Llenar campos</h4>
            <p class="sub-header">llena los campos y guarda tus cambios al dar clic en el boton</p>
            <br>
            <br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/clinicas/'.$clinica->id]) !!}
                
            <div class="form-group row mb-3">    
            {!! Form::label ('id_pais','Pais:',['class' => 'control-label']) !!}
            <div class= col-md-9>
                {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , $clinica->id_pais,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
        
        <br>
                <div class="form-group row mb-3">
                {!! Form::label ('id_municipio','Municipio:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_municipio', $municipio->pluck('nombre','id')->all() , $clinica->id_municipio,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
        
        <br>
                <div class="form-group row mb-3">
                {!! Form::label ('id_entidad','Entidad:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() , $clinica->id_entidad,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
        
        <br>
                <div class="form-group row mb-3">
                {!! Form::label ('institucion','Institucion:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text('institucion',$clinica->institucion,['placeholder'=>'Ingresa nombre del clinicas','class'=>'form-control']) !!}
            </div>
        </div>
        
        <br>
                <div class="form-group row mb-3">
                {!! Form::label ('nombre','Nombre:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text('nombre',$clinica->institucion,['placeholder'=>'Ingresa nombre del clinicas','class'=>'form-control']) !!}
            </div>
        </div>
        
        <br>
                <div class="form-group row mb-3">
                {!! Form::label ('numero','Numero:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text('numero',$clinica->numero,['placeholder'=>'Ingresa nombre del clinicas','class'=>'form-control']) !!}
            </div>
        </div>
        
        <br>
                <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $clinica->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
            </div>
            
            <br>
                <br />
                <br />
            {!! Form::submit('Guardar clinicas', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()