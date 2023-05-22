@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de consultorio</h3>
            <p class="card-text">

                <h5>Id consultorio: {!! $consultorios->id !!}</h5>

                <h5>Numero del consultorio: {!! $consultorios->numero !!}</h5>

                <h5>Nombre del alumno: {!! $consultorios->usuario->nombre !!}</h5>

                <h5>Nombre de la institucion: {!! $consultorios->clinica->institucion !!}</h5>

            </p>
            <br />
    
            
            </div>
            <a href="{!! asset('consultorios') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS CONSULTORIOS</a>
        </div>
    </div>
    @endsection()