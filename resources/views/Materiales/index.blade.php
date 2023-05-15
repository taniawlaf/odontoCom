<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver materiales</title>
</head>
<body>
    <h1>Listado de materiales</h1>
    <a href="materiales/create">Crear un nueva material</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>             
            <th>descripcion</th>
            <th>estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($materiales as $material)
        <tr>
            <td>{!! $material->id !!}</td>
            <td>{!! $material->nombre !!}</td>
            <td>{!! $material->descripcion !!}</td>         
            <td>{!! $material->status !!}</td>
            <td>
                <a href="{!! 'materiales/'.$material->id !!}">Detalle</a>                 
                <a href="{!! 'materiales/'.$material->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/materiales/'.$material->id]) !!}
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
