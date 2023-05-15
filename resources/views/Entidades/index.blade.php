<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Entidades</title>
</head>
<body>
    <h1>Listado de Entidades</h1>
    <a href="entidades/create">Crear un nueva Entidad</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID pais</th>
            <th>Clave de pais</th>
            <th>Nombre</th>             
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($entidades as $entidad)
        <tr>
            <td>{!! $entidad->id !!}</td>
            <td>{!! $entidad->id_pais !!}</td>
            <td>{!! $entidad->nombre !!}</td>           
            <td>{!! $entidad->status !!}</td>
            <td>
                <a href="{!! 'entidades/'.$entidad->id !!}">Detalle</a>                 
                <a href="{!! 'entidades/'.$entidad->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/entidades/'.$entidad->id]) !!}
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
