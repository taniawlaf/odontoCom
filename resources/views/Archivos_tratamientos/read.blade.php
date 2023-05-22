@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de archivosTratamientos</h3>
            <p class="card-text">
    
                

                <h5>Id archivo: {!! $archivosTratamientos->id !!}</h5>

                <h5>Ruta: {!! $archivosTratamientos->ruta !!}</h5>

                <h5>Nombre del tratamiento: {!! $archivosTratamientos->tratamiento->nombre !!}</h5>

                <h5>Estatus:: {!! $archivosTratamientos->status !!}</h5>

                <br />

                
            </p>
            <br />
    
            
            </div>
            <a href="{!! asset('archivosTratamientos') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS Archivos Tratamientos</a>
        </div>
    </div>
    @endsection()