@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Archivos tratamientos</h4>
                    <p class="sub-header">
                        <a class="btn btn-outline-primary waves-effect waves-light" href="archivosTratamientos/create">Crear un nuevo archivo</a>
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col>ID</th>
                            <th scope="col" data-tablesaw-sortable-col>ID id_tratamiento</th>
                            <th scope="col" data-tablesaw-sortable-col>ruta</th>        
                            <th scope="col" data-tablesaw-sortable-col>Estatus</th>
                            <th scope="col" data-tablesaw-sortable-col>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($archivosTratamientos as $archivos)
                        <tr>
                            <td>{!! $archivos->id !!}</td>
                            <td>{!! $archivos->id_tratamiento !!}</td>
                            <td>{!! $archivos->ruta!!}</td>
                            <td>{!! $archivos->status !!}</td>           
                            
                            <td>
                                <a href="{!! 'archivosTratamientos/'.$archivos->id !!}">Detalle</a>  
                                <br>               
                                <a href="{!! 'archivosTratamientos/'.$archivos->id.'/edit' !!}">Editar</a>


                                {!! Form::open(['method' => 'DELETE' , 'url' => '/archivosTratamientos/'.$archivos->id]) !!}
                                    {!! Form::submit('Eliminar',['class'=>'btn-outline-primary']) !!}
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