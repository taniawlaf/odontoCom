@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>

            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/tiposTratamiento/'.$tiposTratamiento->id]) !!}
                
                <div class="form-group row mb-3">    
                    {!! Form::label ('nombre','nombre:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text('nombre',$tiposTratamiento->nombre,['placeholder'=>'Ingresa nombre del tiposTratamientos','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('semestre','semestre:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::text('semestre',$tiposTratamiento->semestre,['placeholder'=>'Ingresa semestre del tiposTratamientos','class'=>'form-control']) !!}
                    </div>
                </div>
                    <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $tiposTratamiento->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                    
                </div> 
                <br>
                <br>
                <br>  
            {!! Form::submit('Guardar tipos Tratamientos', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()