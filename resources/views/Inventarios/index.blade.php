@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Inventarios</h4>
                    <p class="sub-header">
                        The Stack Table stacks the table headers to a two column layout with headers on the left. Resize your viewport to across the 40em (640px) breakpoint to see the change.
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col>ID</th>
                            <th scope="col" data-tablesaw-sortable-col>ID material</th>
                            <th scope="col" data-tablesaw-sortable-col>ID usuario</th>
                            <th scope="col" data-tablesaw-sortable-col>existencia</th>
                            <th scope="col" data-tablesaw-sortable-col>stock</th>  
                            <th scope="col" data-tablesaw-sortable-col>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($inventarios as $inventario)
                            <tr>
                                <td>{!! $inventario->id !!}</td>
                                <td>{!! $inventario->id_material !!}</td>
                                <td>{!! $inventario->id_usuario !!}</td>
                                <td>{!! $inventario->existencia !!}</td>           
                                <td>{!! $inventario->stock !!}</td>
                                <td>
                                    <a href="{!! 'inventario/'.$inventario->id !!}">Detalle</a>  
                                    <br>               
                                    <a href="{!! 'inventario/'.$inventario->id.'/edit' !!}">Editar</a>


                                    {!! Form::open(['method' => 'DELETE' , 'url' => '/inventario/'.$inventario->id]) !!}
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
