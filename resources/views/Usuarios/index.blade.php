<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver usuarios</title>
</head>
<body>
    <h1>Listado de usuarios</h1>
    <a href="usuarios/create">Crear un nueva usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID pais</th>
            <th>ID entidad</th>
            <th>ID municipio</th>
            <th>ID tipoUsuario</th>
            <th>Nombre</th>  
            <th>ap pat</th>  
            <th>ap mat</th>  
            <th>email</th>  
            <th>telefono</th>  
            <th>username</th>  
            <th>password</th>             
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{!! $usuario->id !!}</td>
            <td>{!! $usuario->id_pais !!}</td>
            <td>{!! $usuario->id_entidad !!}</td>
            <td>{!! $usuario->id_municipio !!}</td>
            <td>{!! $usuario->id_tipo_usuario !!}</td>
            <td>{!! $usuario->nombre !!}</td>           
            <td>{!! $usuario->ap_pat !!}</td>
            <td>{!! $usuario->email !!}</td>
            <td>{!! $usuario->telefono !!}</td>
            <td>{!! $usuario->username !!}</td>
            <td>{!! $usuario->password !!}</td>
            <td>{!! $usuario->status !!}</td>
            <td>
                <a href="{!! 'usuarios/'.$usuario->id !!}">Detalle</a>                 
                <a href="{!! 'usuarios/'.$usuario->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/usuarios/'.$usuario->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br />
    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>
</body>
</html>
