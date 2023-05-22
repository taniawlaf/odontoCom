@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/inventarios/'.$inventarios->id]) !!}
                
             <div class="form-group row mb-3">    
            {!! Form::label ('id_material','material:',['class' => 'control-label']) !!}
            <div class= col-md-9>
                {!! Form::select ('id_material', $materiales->pluck('nombre','id')->all() , $inventarios->id_material,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
                    
        </div> 
                <br />
                 <div class="form-group row mb-3">
                {!! Form::label ('id_usuario','usuario:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_usuario', $usuarios->pluck('nombre','id')->all() , $inventarios->id_usuario,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
            </div>
                    
        </div> 
                <br />

                 <div class="form-group row mb-3">
                {!! Form::label ('existencia','existencia:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text('existencia',$inventarios->existencia,['placeholder'=>'Ingresa nombre del inventarios','class'=>'form-control']) !!}
            </div>
                    
        </div> 
                <br />
                 <div class="form-group row mb-3">
                {!! Form::label ('stock','stock:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text('stock',$inventarios->stock,['placeholder'=>'Ingresa nombre del inventarios','class'=>'form-control']) !!}
            </div>
                    
        </div> 
                <br />

                 <div class="form-group row mb-3">
                {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('status', 
                array('1'=>'Activo','0'=>'Baja') , $inventarios->status ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
                    
            </div> 
            <br>
                <br />
                <br />
                {!! Form::submit('Guardar inventarios', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endsection()