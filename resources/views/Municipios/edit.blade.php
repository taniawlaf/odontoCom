@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>

            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/municipios/'.$municipio->id]) !!}
                
                <div class="form-group row mb-3">    
                {!! Form::label ('id_entidad','Entidad:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                    {!! Form::select ('id_entidad', $entidades->pluck('nombre','id')->all() , $municipio->id_entidad ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                                
                </div> 
                <br>

                <div class="form-group row mb-3">
                {!! Form::label ('nombre','Nombre del municipio',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('nombre',$municipio->nombre,['placeholder'=>'Ingresa nombre del municipio','class'=>'form-control']) !!}
                    </div>
                            
                </div> 
                <br>

                <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $municipio->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                    
                </div> 
                <br>
                <br>
            {!! Form::submit('Guardar Municipio', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()