@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Clinicas</h4>
                    <p class="sub-header">
                        The Stack Table stacks the table headers to a two column layout with headers on the left. Resize your viewport to across the 40em (640px) breakpoint to see the change.
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col>ID</th>
                            <th scope="col" data-tablesaw-sortable-col>ID pais</th>
                            <th scope="col" data-tablesaw-sortable-col>ID entidad</th>
                            <th scope="col" data-tablesaw-sortable-col>ID municipio</th>
                            <th scope="col" data-tablesaw-sortable-col>institucion</th>
                            <th scope="col" data-tablesaw-sortable-col>numero</th>            
                            <th scope="col" data-tablesaw-sortable-col>nombre</th>
                            <th scope="col" data-tablesaw-sortable-col>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clinica as $clinicas)
                        <tr>
                            <td>{!! $clinicas->id !!}</td>
                            <td>{!! $clinicas->id_pais !!}</td>
                            <td>{!! $clinicas->id_entidad !!}</td>
                            <td>{!! $clinicas->id_municipio!!}</td>
                            <td>{!! $clinicas->institucion!!}</td>           
                            <td>{!! $clinicas->numero !!}</td>
                            <td>{!! $clinicas->nombre !!}</td>
                            <td>
                                <a href="{!! 'clinicas/'.$clinicas->id !!}">Detalle</a>   
                                <br>              
                                <a href="{!! 'clinica/'.$clinicas->id.'/edit' !!}">Editar</a>


                                {!! Form::open(['method' => 'DELETE' , 'url' => '/clinica/'.$clinicas->id]) !!}
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
