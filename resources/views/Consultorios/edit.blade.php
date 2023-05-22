@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/consultorios/'.$consultorios->id]) !!}
                
            <div class="form-group row mb-3">    
            {!! Form::label ('id_usuario','Usuario:',['class' => 'control-label']) !!}
            <div class= col-md-9>    
            {!! Form::select ('id_usuario', $usuario->pluck('nombre','id')->all() , $consultorios->id_usuario,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
        </div>
    </div>
        <br />
                <div class="form-group row mb-3">
                {!! Form::label ('id_clinica','Clinica:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_clinica', $clinica->pluck('nombre','id')->all() , $consultorios->id_clinica,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
        </div>
            <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('numero','numero:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::number('numero',$consultorios->numero,['placeholder'=>'Ingresa numero del consultorio','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                
                <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $consultorios->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
            </div>
                <br />
            <br />
                <br />
        
            {!! Form::submit('Guardar consultorio', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()