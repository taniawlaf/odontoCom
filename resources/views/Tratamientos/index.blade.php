<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver tratamientos</title>
</head>
<body>
    <h1>Listado de tratamientos</h1>
    <a href="tratamientos/create">Crear un nueva tratamiento</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID tipoTratamiento</th>
            <th>Nombre</th>
            <th>Costo</th>             
            <th>descripcion</th>
            <th>Acciones</th>
        </tr>
        @foreach($tratamientos as $tratamiento)
        <tr>
            <td>{!! $tratamiento->id !!}</td>
            <td>{!! $tratamiento->id_tipo_tratamiento !!}</td>
            <td>{!! $tratamiento->nombre !!}</td>
            <td>{!! $tratamiento->costo !!}</td>           
            <td>{!! $tratamiento->descripcion !!}</td>
            <td>
                <a href="{!! 'tratamientos/'.$tratamiento->id !!}">Detalle</a>                 
                <a href="{!! 'tratamientos/'.$tratamiento->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/tratamientos/'.$tratamiento->id]) !!}
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
