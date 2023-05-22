@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de tratamiento</h3>
            <p class="card-text">
                <h5>Id tratamiento: {!! $tratamientos->id !!}</h5>

                <h5>Nombre del tratamiento: {!! $tratamientos->nombre !!}</h5>

                <h5>Descripcion: {!! $tratamientos->descripcion!!}</h5>

                <h5>Costo: {!! $tratamientos->costo!!}</h5>

                <h5>Tipo de Tratamiento: {!! $tratamientos->tipos_tratamiento->nombre !!}</h5>

                <h5>Status: {!! $tratamientos->status !!}</h5>

            </p>
            <br />
        </div>
        <a href="{!! asset('tratamiento') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS TRATAMIENTOS</a>
    </div>
</div>
@endsection()