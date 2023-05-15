<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver consultorio</title>
</head>
<body>
    <h1>Listado de consultorio</h1>
    <a href="consultorio/create">Crear un nueva Entidad</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID usuario</th>
            <th>ID clinica</th>          
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($consultorios as $consultorio)
        <tr>
            <td>{!! $consultorio->id !!}</td>
            <td>{!! $consultorio->id_usuario !!}</td>
            <td>{!! $consultorio->id_clinica !!}</td>         
            <td>{!! $consultorio->status !!}</td>
            <td>
                <a href="{!! 'consultorios/'.$consultorio->id !!}">Detalle</a>                 
                <a href="{!! 'consultorios/'.$consultorio->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/consultorios/'.$consultorio->id]) !!}
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
