
    @extends('template.master')

    @section('contenido_central')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="card card-body"> 
                <h3 class="card-title">Detalle de municipio</h3>   

                <h5>Id municipio: {!! $municipio->id_entidad !!}</h5>

                <h5>Nombre de la entidad: {!! $municipio->entidade->nombre !!}</h5>

                <h5>Nombre del pais: {!! $municipio->entidade->paise->nombre !!}</h5>

                <h5>Nombre municipio: {!! $municipio->nombre !!}</h5>

                <h5>Status: {!! $municipio->status !!}</h5>

            </p>
            <br />
            </div>
            <a href="{!! asset('municipios') !!}" class="btn btn-primary waves-effect waves-light">REGRESAR A LOS MUNICIPIOSS</a>
        </div>
    </div>
    @endsection()