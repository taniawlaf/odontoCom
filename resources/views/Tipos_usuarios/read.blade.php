@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de tipos de Usuario</h3>
            <p class="card-text">
    
                

                <h5>Id tiposUsuario: {!! $tiposUsuario->id !!}</h5>

                <h5>Nombre del tipo de Usuario: {!! $tiposUsuario->nombre !!}</h5>

                <h5>Nivel: {!! $tiposUsuario->nivel!!}</h5>

                <h5>Status: {!! $tiposUsuario->status !!}</h5>

            </p>
        <br />

        </div>
        <a href="{!! asset('tiposUsuario') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS CRUDSTIPOS USUARIOS </a>>
</div>
@endsection()