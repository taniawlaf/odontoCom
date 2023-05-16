@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Tratamientos</h4>
                    <p class="sub-header">
                        The Stack Table stacks the table headers to a two column layout with headers on the left. Resize your viewport to across the 40em (640px) breakpoint to see the change.
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                            
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col>ID</th>
                            <th scope="col" data-tablesaw-sortable-col>ID tipo Tratamiento</th>
                            <th scope="col" data-tablesaw-sortable-col>Nombre</th>
                            <th scope="col" data-tablesaw-sortable-col>Costo</th>             
                            <th scope="col" data-tablesaw-sortable-col>descripcion</th>
                            <th scope="col" data-tablesaw-sortable-col>Acciones</th>
                        </tr>
                        </thead>   
                        <body>
                            @foreach($tratamientos as $tratamiento)
                            <tr>
                                <td>{!! $tratamiento->id !!}</td>
                                <td>{!! $tratamiento->id_tipo_tratamiento !!}</td>
                                <td>{!! $tratamiento->nombre !!}</td>
                                <td>{!! $tratamiento->costo !!}</td>           
                                <td>{!! $tratamiento->descripcion !!}</td>
                                <td>
                                    <a href="{!! 'tratamiento/'.$tratamiento->id !!}">Detalle</a>  
                                    <br>               
                                    <a href="{!! 'tratamiento/'.$tratamiento->id.'/edit' !!}">Editar</a>


                                    {!! Form::open(['method' => 'DELETE' , 'url' => '/tratamiento/'.$tratamiento->id]) !!}
                                        {!! Form::submit('Eliminar') !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </body>   
                    </table>
                </div>
                <a class="btn btn-outline-primary waves-effect waves-light" href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>
            </div>
        </div>      
    </div>  
@endsection()
