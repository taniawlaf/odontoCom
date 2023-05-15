<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver tipUsuarioes</title>
</head>
<body>
    <h1>Listado de tipUsuarioes</h1>
    <a href="tiposUsuario/create">Crear un nueva tipUsuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>nivel</th>            
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($tiposUsuario as $tipUsuario)
        <tr>
            <td>{!! $tipUsuario->id !!}</td>
            <td>{!! $tipUsuario->nombre !!}</td>
            <td>{!! $tipUsuario->nivel !!}</td>         
            <td>{!! $tipUsuario->status !!}</td>
            <td>
                <a href="{!! 'tiposUsuario/'.$tipUsuario->id !!}">Detalle</a>                 
                <a href="{!! 'tiposUsuario/'.$tipUsuario->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/tiposUsuario/'.$tipUsuario->id]) !!}
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
