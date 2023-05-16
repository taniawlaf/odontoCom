@extends('template.master')
@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Historial Tratamientos</h4>
                <p class="text-muted font-13 mb-4">
                    This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an
                    alternative method to pagination for displaying a large table in a fairly small vertical area, and as such
                    pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled
                    as well!).
                </p>

                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Tratamiento</th>
                            <th>Paciente</th>
                            <th>Fecha</th>
                           
                        </tr>
                    </thead>
                
                
                    <tbody>
                        @foreach ($arrayCitas as $item)
                        <tr>
                            <td>
                                {{$item->tratamiento->nombre}}
                            </td>
                            <td>
                                {{$item->usuario->nombre}}
                            </td>
                            <td>{{$item->fecha->format('d-m-Y H:i:s')}}</td>
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