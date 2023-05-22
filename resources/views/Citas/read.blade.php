@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de cita</h3>
            <p class="card-text">
    
                

                <h5>Id cita: {!! $cita->id !!}</h5>

                <h5>Fecha y hora de la cita: {!! $cita->fecha !!}</h5>

                <h5>Nombre del paciente: {!! $cita->usuario->nombre !!}</h5>

                <h5>Nombre del tratamiento: {!! $cita->tratamiento->nombre !!}</h5>

                <br />

                
            </p>
            <br />
    
            
            </div>
            <a href="{!! asset('citas') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS CITAS</a>
        </div>
    </div>
    @endsection()