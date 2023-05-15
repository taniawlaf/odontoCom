<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver inventarios</title>
</head>
<body>
    <h1>Listado de inventarios</h1>
    <a href="inventario/create">Crear un nueva inventario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID material</th>
            <th>ID usuario</th>
            <th>existencia</th>
            <th>stock</th>  
            <th>Acciones</th>
        </tr>
        @foreach($inventarios as $inventario)
        <tr>
            <td>{!! $inventario->id !!}</td>
            <td>{!! $inventario->id_material !!}</td>
            <td>{!! $inventario->id_usuario !!}</td>
            <td>{!! $inventario->existencia !!}</td>           
            <td>{!! $inventario->stock !!}</td>
            <td>
                <a href="{!! 'inventario/'.$inventario->id !!}">Detalle</a>                 
                <a href="{!! 'inventario/'.$inventario->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/inventario/'.$inventario->id]) !!}
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
