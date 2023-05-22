@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/paises/'.$pais->id]) !!}
            
                <div class="form-group row mb-3">    
                    {!! Form::label ('nombre','Nombre del pais',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                      {!! Form::text ('nombre',$pais->nombre,['placeholder'=>'Ingresa nombre del pais','class'=>'form-control']) !!}
                    </div>
                </div>
                <br />
            
                <div class="form-group row mb-3">
                {!! Form::label ('clave','clave del pais',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text ('clave',$pais->clave,['placeholder'=>'Ingresa clave del pais','class'=>'form-control']) !!}
                    </div>
                </div>
                <br />
            
                <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('status', 
                        array('1'=>'Activo','0'=>'Baja') , $pais->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                </div>
                <br />
                <br />
                <br />
            
            {!! Form::submit('Editar Pais', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()

