@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Citas</h4>
                    <p class="sub-header">
                        <a class="btn btn-outline-primary waves-effect waves-light" href="citas/create">Crear un nueva cita</a>
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID tratamiento</th>
                            <th>ID usuario</th>
                            <th>Fecha</th>
                                        
                            <th>Estatus</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cita as $citas)
                        <tr>
                            <td>{!! $citas->id !!}</td>
                            <td>{!! $citas->id_tratamiento !!}</td>
                            <td>{!! $citas->id_usuario!!}</td>
                            <td>{!! $citas->fecha !!}</td>           
                            <td>{!! $citas->status !!}</td>
                            <td>
                                <a href="{!! 'citas/'.$citas->id !!}">Detalle</a>   
                                <br>              
                                <a href="{!! 'citas/'.$citas->id.'/edit' !!}">Editar</a>


                                {!! Form::open(['method' => 'DELETE' , 'url' => '/citas/'.$citas->id]) !!}
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

