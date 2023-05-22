@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/citas/'.$citas->id]) !!}
                
            <div class="form-group row mb-3">    
            {!! Form::label ('id_tratamiento','tratamiento:', ['class'=>'control-label']) !!}
            <div class= col-md-9>
                {!! Form::select ('id_trataminto', $tratamientos->pluck('nombre','id')->all() , $citas->id_tratamiento,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
                    
        </div> 
        <br>
        <div class="form-group row mb-3">        
        {!! Form::label ('id_usuario','usuario:', ['class'=>'control-label']) !!}
        <div class= col-md-9>
                {!! Form::select ('id_usuario', $usuarios->pluck('nombre','id')->all() , $citas->id_usuario,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
                    
        </div> 
        <br>
        <div class="form-group row mb-3">        
        {!! Form::label ('fecha','fecha:', ['class'=>'control-label']) !!}
        <div class= col-md-9>
                {!! Form::date('fecha',$citas->fecha,['placeholder'=>'Ingresa nombre del citas','class'=>'form-control']) !!}
            </div>
                    
        </div> 
        <br>
        <div class="form-group row mb-3">        
        {!! Form::label ('status','Estatus:', ['class'=>'control-label']) !!}
        <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $citas->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
                    
            </div> 
            <br>
                <br />
                <br />
            {!! Form::submit('Guardar citas', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()