@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Editar campos</h4>
            <p class="sub-header">edita los campos y guarda tus cambios al dar clic en el boton</p>
            <br><br>
            <script
                src="{!! asset('style/assets/jquery.min.js') !!}">
            </script>
            <script>
                function cambiar_combo(id_pais){
                    $("#id_entidad").empty();
                    var ruta = "{{ asset('combo_entidad_muni') }}/"+id_pais;
                    $.ajax({
                        type:'GET',
                        url: ruta,

                        success: function(data){
                            var entidades = data;
                            $('#id_entidad').append('<option value=""> Seleccionar ...</option>');
                            for (var i = 0; i < entidades.length; i++){
                                $('#id_entidad').append('<option value"'+ entidades[i].id + '">' + entidades[i]
                                    .nombre + '</option>');
                            }
                        }
                    });
                }
            </script>
            {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/municipios/'.$municipio->id]) !!}
            <div class="form-group row mb-3">
                {!! Form::label ('id_pais','Pais:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , $municipio->entidade->id_paise ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info', 'onchange' =>'cambiar_combo(this.value);']) !!}
                </div>
            </div>
            <br>
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