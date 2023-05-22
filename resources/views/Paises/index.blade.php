@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Paises</h4>
                    <p class="sub-header">
                        <a class="btn btn-outline-primary waves-effect waves-light" href="paises/create">Crear un nuevo pais</a>
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col>ID</th>
                            <th scope="col" data-tablesaw-sortable-col>Nombre</th>
                            <th scope="col" data-tablesaw-sortable-col>Clave</th>
                            <th scope="col" data-tablesaw-sortable-col>Estatus</th>
                            <th scope="col" data-tablesaw-sortable-col>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($paises as $pais)
                        <tr>
                            <td>{!! $pais->id !!}</td>
                            <td>{!! $pais->nombre !!}</td>
                            <td>{!! $pais->clave !!}</td>
                            <td>{!! $pais->status !!}</td>
                            <td>
                                <a href="{!! 'paises/'.$pais->id !!}">Detalle</a>  
                                <br>             
                                <a href="{!! 'paises/'.$pais->id.'/edit' !!}">Editar</a>
                                {!! Form::open(['method' => 'DELETE' , 'url' => '/paises/'.$pais->id]) !!}
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


