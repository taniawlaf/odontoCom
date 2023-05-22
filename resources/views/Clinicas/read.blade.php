@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de clinica</h3>
            <p class="card-text">
    


                <h5>Id clinica: {!! $clinica->id_entidad !!}</h5>

                <h5>Nombre de la clinica: {!! $clinica->municipio->nombre !!}</h5>

                <h5>Nombre de la entidad: {!! $clinica->entidade->nombre !!}</h5>

                <h5>Nombre del pais: {!! $clinica->entidade->paise->nombre !!}</h5>

                <h5>Institucion: {!! $clinica->institucion !!}</h5>

                <h5>Clinica: {!! $clinica->nombre !!}</h5>

                <h5>Numero: {!! $clinica->numero !!}</h5>

                <h5>Status: {!! $clinica->status !!}</h5>
            </p>
            <br />
    
           
            </div>
            <a href="{!! asset('clinicas') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS CLINICAS</a>
        </div>
    </div>
    @endsection()