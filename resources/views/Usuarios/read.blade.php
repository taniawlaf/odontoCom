@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de Usuario</h3>
            <p class="card-text">

                <h5>Id usuario: {!! $Usuario->id !!}</h5>

                <h5>Nombre: {!! $Usuario->nombre !!}</h5>

                <h5>Ap paterno: {!! $Usuario->ap_pat !!}</h5>

                <h5>Ap materno: {!! $Usuario->ap_mat !!}</h5>

                <h5>email: {!! $Usuario->email!!}</h5>

                <h5>telefono: {!! $Usuario->telefono!!}</h5>

                <h5>Status: {!! $Usuario->status !!}</h5>

                <h5>Nombre de la entidad: {!! $Usuario->municipio->nombre !!}</h5>

                <h5>Nombre de la entidad: {!! $Usuario->entidade->nombre !!}</h5>

                <h5>Nombre del pais: {!! $Usuario->entidade->paise->nombre !!}</h5>
            </p>
            <br />
        </div>
            <a href="{!! asset('usuarios') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS USUARIOS</a>
    </div>
</div>
    @endsection()