@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
       <div class="card-box">
            <h4 class="header-title">Llenar campos</h4>
            <p class="sub-header">llena los campos y guarda tus cambios al dar clic en el boton</p>
            <br>
            <br>
            <script
                 src="{!! asset('style/assets/jquery.min.js') !!}">
            </script>
            <script>
                function cambiar_combo_entidad(id_pais){
                    // console.log("cambiar combo :)");
                    $("#id_entidad").empty();
                    $("#municipio_id").empty();
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
                function cambiar_combo_municipios(id_entidad){
                    
                    $("#municipio_id").empty();
                    var ruta = "{{ asset('combo_municipio') }}/"+id_entidad;
                    $.ajax({
                        type:'GET',
                        url: ruta,

                        success: function(data){
                            var municipios = data;
                            $('#municipio_id').append('<option value=""> Seleccionar ...</option>');
                            for (var j = 0; j < municipios.length; j++){
                                console.log(municipios[j].nombre);
                                $('#municipio_id').append('<option value"'+ municipios[j].id + '">' + municipios[j]
                                    .nombre + '</option>');
                            }
                        }
                    });
                }
                
            </script>
            {!! Form::open(['url'=>'/usuarios']) !!}
            <div class="form-group row mb-3">
                {!! Form::label ('id_pais','Pais:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_pais', $paises->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info', 'onchange' => 'cambiar_combo_entidad(this.value);']) !!}
                </div>
            </div>
                <br />
             <div class="form-group row mb-3">
                {!! Form::label ('id_entidad','Entidad:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_entidad', array(''=>'') , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info', 'onchange' => 'cambiar_combo_municipios(this.value);']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('id_municipio','Municipio:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('municipio_id', array(''=>''), null ,['place holder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('id_tipo_usuario','tipoUsuario:',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::select ('id_tipo_usuario', $tipoUsuario->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('nombre','Nombre del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('ap_pat','apellido paterno del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('ap_pat',null,['placeholder'=>'Ingresa apellido paterno del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('ap_mat','apellido materno del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('ap_mat',null,['placeholder'=>'Ingresa apellidomaterno del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('email','email del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::email ('email',null,['placeholder'=>'Ingresa nombre del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('telefono','telefono del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('telefono',null,['placeholder'=>'Ingresa nombre del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('username','username del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::text ('username',null,['placeholder'=>'Ingresa username del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                {!! Form::label ('password','password del Usuario',['class' => 'control-label']) !!}
                <div class= col-md-9>
                {!! Form::password ('password',null,['placeholder'=>'Ingresa password del Usuario','class'=>'form-control']) !!}
                </div>
                </div>
                <br />
                <div class="form-group row mb-3">
                    {!! Form::label ('status','Estatus:',['class' => 'control-label']) !!}
                    <div class= col-md-9>
                        {!! Form::select ('status', 
                        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...','class'=>'btn-outline-info']) !!}
                    </div>
                </div>
                
                <br>
                <br>
                <br>  
            {!! Form::submit('Guardar usuario', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()