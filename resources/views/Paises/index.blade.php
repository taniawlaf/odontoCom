<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Paises</title>
</head>
<body>
    <h1>Listado de paises</h1>
    <a href="paises/create">Crear un nuevo pais</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Clave</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($paises as $pais)
        <tr>
            <td>{!! $pais->id !!}</td>
            <td>{!! $pais->nombre !!}</td>
            <td>{!! $pais->clave !!}</td>
            <td>{!! $pais->status !!}</td>
            <td>
                <a href="{!! 'paises/'.$pais->id !!}">Detalle</a>               
                <a href="{!! 'paises/'.$pais->id.'/edit' !!}">Editar</a>
                <a href="">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br />
    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>
</body>
</html>