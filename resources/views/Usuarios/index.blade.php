@extends('template.master')
@section('contenido_central')
<div class="wrapper">         
   <!-- <div class="container-fluid">-->
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <h4 class="header-title">Usuarios</h4>
                    <p class="sub-header">
                        <a class="btn btn-outline-primary waves-effect waves-light" href="usuarios/create">Crear un nuevo usuario</a>
                    </p>

                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">ID</th>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">ID pais</th>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">ID ent.</th>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">ID mun.</th>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">ID t.Usu.</th>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Nombre</th>  
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">ap pat</th>  
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">ap mat</th>  
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">email</th>  
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">telefono</th>  
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">username</th>  
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">password</th>             
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Estatus</th>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Acciones</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{!! $usuario->id !!}</td>
                                <td>{!! $usuario->id_pais !!}</td>
                                <td>{!! $usuario->id_entidad !!}</td>
                                <td>{!! $usuario->id_municipio !!}</td>
                                <td>{!! $usuario->id_tipo_usuario !!}</td>
                                <td>{!! $usuario->nombre !!}</td>           
                                <td>{!! $usuario->ap_pat !!}</td>
                                <td>{!! $usuario->ap_mat !!}</td>
                                <td>{!! $usuario->email !!}</td>
                                <td>{!! $usuario->telefono !!}</td>
                                <td>{!! $usuario->username !!}</td>
                                <td>{!! $usuario->password !!}</td>
                                <td>{!! $usuario->status !!}</td>
                                <td>
                                    <a href="{!! 'usuarios/'.$usuario->id !!}">Detalle</a>  
                                    <br>               
                                    <a href="{!! 'usuarios/'.$usuario->id.'/edit' !!}">Editar</a>
                    
                    
                                    {!! Form::open(['method' => 'DELETE' , 'url' => '/usuarios/'.$usuario->id]) !!}
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


