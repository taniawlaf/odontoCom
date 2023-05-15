@extends('template.master')
@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Inventario Materiales</h4>
                <p class="text-muted font-13 mb-4">
                    This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an
                    alternative method to pagination for displaying a large table in a fairly small vertical area, and as such
                    pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled
                    as well!).
                </p>

                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Existencias</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                        @foreach ($arrayInventarios as $item)
                            <tr>
                                <td>{{$item->materiale->nombre}}</td>
                                <td>{{$item->materiale->descripcion}}</td>
                                <td>{{$item->existencia}}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
        
    </div> <!-- end container -->
</div>
<!-- end wrapper -->
@endsection()