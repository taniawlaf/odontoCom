@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card card-body">
            <h3 class="card-title">Detalle de inventario</h3>
            <p class="card-text">
    
            

            <h5>Id inventario: {!! $inventario->id !!}</h5>

            <h5>Existencias: {!! $inventario->existencia !!}</h5>

            <h5>Stock: {!! $inventario->stock !!}</h5>

            <h5>Nombre del material: {!! $inventario->materiale->nombre !!}</h5>

            <h5>Nombre del alumno: {!! $inventario->usuario->nombre !!}</h5>

            <h5>Status: {!! $inventario->status !!}</h5>

        </p>
        <br />

        
        </div>
        <a href="{!! asset('inventario') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR AL INVENTARIO</a>
    </div>
</div>
@endsection()
   