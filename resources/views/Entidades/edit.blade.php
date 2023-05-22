@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
           {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/entidades/'.$entidad->id]) !!}
        
           <div class="form-group row mb-3">     
           {!! Form::label ('id_pais','Pais:',['class' => 'control-label']) !!}
           <div class= col-md-9>
                {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , $entidad->clave_pais ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
            <br />

            <div class="form-group row mb-3">    
            {!! Form::label ('nombre','Nombre de la entidad',['class' => 'control-label']) !!}
            <div class= col-md-9>
                {!! Form::text ('nombre',$entidad->nombre,['placeholder'=>'Ingresa nombre de la entidad','class'=>'form-control']) !!}
            </div>
        </div>
            <br />

            <div class="form-group row mb-3">    
            {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
            <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $entidad->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                 </div>
                </div>
                    <br />
                <br />
                <br />
            {!! Form::submit('Editar Entidad', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()