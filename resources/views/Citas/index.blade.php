<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver citas</title>
</head>
<body>
    <h1>Listado de citas</h1>
    <a href="citas/create">Crear un nueva citas</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID tratamiento</th>
            <th>ID usuario</th>
            <th>Fecha</th>
                         
            <th>Estatus</th>
            <th>Acciones</th>
            
        </tr>
        @foreach($cita as $citas)
        <tr>
            <td>{!! $citas->id !!}</td>
            <td>{!! $citas->id_tratamiento !!}</td>
            <td>{!! $citas->id_usuario!!}</td>
            <td>{!! $citas->fecha !!}</td>           
            <td>{!! $citas->status !!}</td>
            <td>
                <a href="{!! 'citas/'.$citas->id !!}">Detalle</a>                 
                <a href="{!! 'citas/'.$citas->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/citas/'.$citas->id]) !!}
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

