@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Municipios</h4>
                    <p class="sub-header">
                        The Stack Table stacks the table headers to a two column layout with headers on the left. Resize your viewport to across the 40em (640px) breakpoint to see the change.
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col>ID</th>
                            <th scope="col" data-tablesaw-sortable-col>Id_entidad</th>
                            <th scope="col" data-tablesaw-sortable-col>Entidad</th>
                            <th scope="col" data-tablesaw-sortable-col>Pais</th>
                            <th scope="col" data-tablesaw-sortable-col>Nombre</th>             
                            <th scope="col" data-tablesaw-sortable-col>Estatus</th>
                            <th scope="col" data-tablesaw-sortable-col>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($municipios as $municipio)
                        <tr>
                            <td>{!! $municipio->id !!}</td>
                            <td>{!! $municipio->id_entidad !!}</td>
                            <td>{!! $municipio->entidade->nombre !!}</td>
                            <td>{!! $municipio->entidade->paise->nombre !!}</td>
                            <td>{!! $municipio->nombre !!}</td>             
                            <td>{!! $municipio->status !!}</td>
                            <td>
                                <a href="{!! 'municipios/'.$municipio->id !!}">Detalle</a>  
                                <br>            
                                <a href="{!! 'municipios/'.$municipio->id.'/edit' !!}">Editar</a>

                                {!! Form::open(['method' => 'DELETE' , 'url' => '/municipios/'.$municipio->id]) !!}
                                    {!! Form::submit('Eliminar') !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end card-box-->
            
                <a class="btn btn-outline-primary waves-effect waves-light" href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>
            
        </div> <!-- end col -->
    </div>
<!-- </div>-->
</div>
@endsection()