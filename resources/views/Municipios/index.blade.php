<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Municipios</title>
</head>
<body>
    <h1>Listado de Municipios</h1>
    <a href="municipios/create">Crear un nuevo Municipio</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Id_entidad</th>
            <th>Entidad</th>
            <th>Pais</th>
            <th>Nombre</th>             
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($municipios as $municipio)
        <tr>
            <td>{!! $municipio->id !!}</td>
            <td>{!! $municipio->id_entidad !!}</td>
            <td>{!! $municipio->entidades->nombre !!}</td>
            <td>{!! $municipio->entidades->paises->nombre !!}</td>
            <td>{!! $municipio->nombre !!}</td>             
            <td>{!! $municipio->status !!}</td>
            <td>
                <a href="{!! 'municipios/'.$municipio->id !!}">Detalle</a>              
                <a href="{!! 'municipios/'.$municipio->id.'/edit' !!}">Editar</a>

                {!! Form::open(['method' => 'DELETE' , 'url' => '/municipios/'.$municipio->id]) !!}
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