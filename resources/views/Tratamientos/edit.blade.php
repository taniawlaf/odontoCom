@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/tratamiento/'.$tratamientos->id]) !!}
                
            <div class="form-group row mb-3">    
                {!! Form::label ('id_tipo_tratamiento','material:') !!}
                <div class= col-md-9>
                {!! Form::select ('id_tipo_tratamiento', $tratamientos->pluck('nombre','id')->all() , $tratamientos->id_tipo_tratamiento,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
            </div>
            <br />
                
            <div class="form-group row mb-3">
                {!! Form::label ('nombre','nombre:') !!}
                <div class= col-md-9>
                {!! Form::text('nombre',$tratamientos->nombre,['placeholder'=>'Ingresa nombre del tratamiento','class'=>'form-control']) !!}
                </div>
            </div>
            <br />
            <div class="form-group row mb-3">
                {!! Form::label ('costo','costo:') !!}
                <div class= col-md-9>
                {!! Form::number('costo',$tratamientos->costo,['placeholder'=>'Ingresa costo del tratamiento','class'=>'form-control']) !!}
                </div>
            </div>
            <br />
            <div class="form-group row mb-3">
                {!! Form::label ('descripcion','descripcion:') !!}
                <div class= col-md-9>
                {!! Form::text('descripcion',$tratamientos->descripcion,['placeholder'=>'Ingresa descripcion del tratamiento','class'=>'form-control']) !!}
                </div>
            </div>
            <br />
            <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:') !!}
                <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $tratamientos->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
            </div>
            <br>
            <br>  
            <br />
                {!! Form::submit('Guardar tratamiento', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()