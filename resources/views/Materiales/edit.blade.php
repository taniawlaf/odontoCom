@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
                    <br><br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/materiales/'.$material->id]) !!}

            <div class="form-group row mb-3">    
            {!! Form::label ('nombre','nombre:',['class' => 'control-label']) !!}
            <div class= col-md-9>
                {!! Form::text('nombre',$material->nombre,['placeholder'=>'Ingresa nombre del material','class'=>'form-control']) !!}
            </div>
        </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('descripcion','descripcion:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text('descripcion',$material->descripcion,['placeholder'=>'Ingresa nombre del material','class'=>'form-control']) !!}
            </div>
        </div>
                <br />

                <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $material->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
        <br><br>
                <br />
            {!! Form::submit('Guardar material', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()