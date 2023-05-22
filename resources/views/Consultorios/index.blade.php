@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Consultorios</h4>
                    <p class="sub-header">
                        <a class="btn btn-outline-primary waves-effect waves-light" href="consultorios/create">Crear un nuevo consultorio</a>
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col>ID</th>
                            
                            <th scope="col" data-tablesaw-sortable-col>usuario</th>
                            
                            <th scope="col" data-tablesaw-sortable-col> clinica</th>
                            <th scope="col" data-tablesaw-sortable-col>institucion</th>        
                            <th scope="col" data-tablesaw-sortable-col>Estatus</th>
                            <th scope="col" data-tablesaw-sortable-col>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consultorios as $consultorio)
                        <tr>
                            <td>{!! $consultorio->id !!}</td>
                            
                            <td>{!! $consultorio->usuario->nombre !!}</td>
                            
                            <td>{!! $consultorio->clinica->nombre !!}</td> 
                            <td>{!! $consultorio->clinica->institucion !!}</td>         
                            <td>{!! $consultorio->status !!}</td>
                            <td>
                                <a href="{!! 'consultorios/'.$consultorio->id !!}">Detalle</a> 
                                <br>                
                                <a href="{!! 'consultorios/'.$consultorio->id.'/edit' !!}">Editar</a>


                                {!! Form::open(['method' => 'DELETE' , 'url' => '/consultorios/'.$consultorio->id]) !!}
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