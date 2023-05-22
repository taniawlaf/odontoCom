@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Llenar campos</h4>
            <p class="sub-header">llena los campos y guarda tus cambios al dar clic en el boton</p>
            <br>
            <br>
            {!! Form::open(['url'=>'/inventario']) !!}
                
             <div class="form-group row mb-3">    
            {!! Form::label ('id_material','Material:',['class' => 'control-label']) !!}
            <div class= col-md-9>
                {!! Form::select ('id_material', $materiales->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                            
                </div> 
                <br />
                <br />
                <br />
                 <div class="form-group row mb-3">
                {!! Form::label ('id_usuario','Usuario:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_usuario', $usuarios->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                            
                </div> 
                <br />
                <br />

                 <div class="form-group row mb-3">
                {!! Form::label ('existencia','numero de existencias',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::number ('existencia',null,['placeholder'=>'Ingresa existencias','class'=>'form-control']) !!}
                    </div>
                            
                </div> 
                <br />
                <br />

                 <div class="form-group row mb-3">
                {!! Form::label ('stock','cantidad de stock',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::number ('stock',null,['placeholder'=>'Ingresa stock','class'=>'form-control']) !!}
                
                    </div>
                            
                </div> 
                <br />
                <br />

                 <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                        
                </div> 
                <br />
                <br />
            {!! Form::submit('Guardar Inventario', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()