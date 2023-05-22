@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de pais</h3>
            <p class="card-text">
                

                <h5>Nombre: {!! $pais->nombre !!}</h5>

                <h5>Clave: {!! $pais->clave !!}</h5>

                <h5>Status: {!! $pais->status !!}</h5>
            </p>
            <br />
    
           
            </div>
            <a href="{!! asset('paises') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS PAISES</a>
        </div>
    </div>
    @endsection()

