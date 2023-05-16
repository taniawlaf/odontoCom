@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Materiales</h4>
                    <p class="sub-header">
                        The Stack Table stacks the table headers to a two column layout with headers on the left. Resize your viewport to across the 40em (640px) breakpoint to see the change.
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>             
                            <th>descripcion</th>
                            <th>estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($materiales as $material)
                        <tr>
                            <td>{!! $material->id !!}</td>
                            <td>{!! $material->nombre !!}</td>
                            <td>{!! $material->descripcion !!}</td>         
                            <td>{!! $material->status !!}</td>
                            <td>
                                <a href="{!! 'materiales/'.$material->id !!}">Detalle</a>   
                                <br>              
                                <a href="{!! 'materiales/'.$material->id.'/edit' !!}">Editar</a>


                                {!! Form::open(['method' => 'DELETE' , 'url' => '/materiales/'.$material->id]) !!}
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