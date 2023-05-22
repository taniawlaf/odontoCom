@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de entidad</h3>
            <p class="card-text">
    
    

                <h5>Clave de pais: {!! $entidad->paise->clave !!}</h5>

                <h5>Pais: {!! $entidad->paise->nombre !!}</h5>

                <h5>Nombre: {!! $entidad->nombre !!}</h5>

                <h5>Status: {!! $entidad->status !!}</h5>
            </p>
            <br />
    
            
            </div>
            <a href="{!! asset('entidades') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A ENTIDADES</a>
        </div>
        
    </div>
    @endsection()