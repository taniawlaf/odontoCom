
    @extends('template.master')

    @section('contenido_central')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="card card-body">
                <h3 class="card-title">Detalle de material</h3>
                <p class="card-text">
                
                

                <h5>Id material: {!! $material->id !!}</h5>

                <h5>Nombre del material: {!! $material->nombre !!}</h5>

                <h5>Descripcion: {!! $material->descripcion!!}</h5>

                <h5>Status: {!! $material->status !!}</h5>
            </p>
            <br />
    
            
            </div>
            <a href="{!! asset('materiales') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS MATERIALES</a>
        </div>
    </div>
    @endsection()