@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Clinicas</h4>
                    <p class="sub-header">
                        <a class="btn btn-outline-primary waves-effect waves-light" href="clinicas/create">Crear un nueva clinica</a>
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col>ID</th>
                            <th scope="col" data-tablesaw-sortable-col>pais</th>
                            <th scope="col" data-tablesaw-sortable-col>entidad</th>
                            <th scope="col" data-tablesaw-sortable-col>municipio</th>
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
                            <td>{!! $clinicas->paise->nombre !!}</td>
                            <td>{!! $clinicas->entidade->nombre!!}</td>
                            <td>{!! $clinicas->municipio->nombre!!}</td>
                            <td>{!! $clinicas->institucion!!}</td>           
                            <td>{!! $clinicas->numero !!}</td>
                            <td>{!! $clinicas->nombre !!}</td>
                            <td>
                                <a href="{!! 'clinicas/'.$clinicas->id !!}">Detalle</a>   
                                <br>              
                                <a href="{!! 'clinicas/'.$clinicas->id.'/edit' !!}">Editar</a>


                                {!! Form::open(['method' => 'DELETE' , 'url' => '/clinicas/'.$clinicas->id]) !!}
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
