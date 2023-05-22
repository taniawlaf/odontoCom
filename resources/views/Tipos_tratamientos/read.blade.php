@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de tipos de Tratamiento</h3>
            <p class="card-text">
    
                

                <h5>Id tipo de Tratamiento: {!! $tiposTratamiento->id !!}</h5>

                <h5>Nombre del tipo de Tratamiento: {!! $tiposTratamiento->nombre !!}</h5>

                <h5>Semestre: {!! $tiposTratamiento->semestre!!}</h5>

                <h5>Status: {!! $tiposTratamiento->status !!}</h5>
            </p>
            <br />
    
            </div>
            <a href="{!! asset('tiposTratamiento') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS TIPOS TRATAMIENTOS</a>
        </div>
    </div>
    @endsection()