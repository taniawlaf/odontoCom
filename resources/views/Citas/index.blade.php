<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver citas</title>
</head>
<body>
    <h1>Listado de citas</h1>
    <a href="cita/create">Crear un nueva citas</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID tratamiento</th>
            <th>ID usuario</th>
            <th>Fecha</th>
                         
            <th>Estatus</th>
            <th>Acciones</th>
            
        </tr>
        @foreach($citas as $cita)
        <tr>
            <td>{!! $cita->id !!}</td>
            <td>{!! $cita->id_tratamiento !!}</td>
            <td>{!! $cita->id_usuario!!}</td>
            <td>{!! $cita->fecha !!}</td>           
            <td>{!! $cita->status !!}</td>
            <td>
                <a href="{!! 'cita/'.$cita->id !!}">Detalle</a>                 
                <a href="{!! 'cita/'.$cita->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/cita/'.$cita->id]) !!}
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver citas</title>
</head>
<body>
    <h1>Listado de citas</h1>
    <a href="citas/create">Crear un nueva Entidad</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID pais</th>
            <th>ID entidad</th>
            <th>ID municipio</th>
            <th>institucion</th>
            <th>numero</th>            
            <th>nombre</th>
            
        </tr>
        @foreach($cita as $cita)
        <tr>
            <td>{!! $cita->id !!}</td>
            <td>{!! $cita->id_tratamiento !!}</td>
            <td>{!! $cita->id_usuario!!}</td>
            <td>{!! $cita->fecha !!}</td>           
            <td>{!! $cita->status !!}</td>
            <td>
                <a href="{!! 'cita/'.$cita->id !!}">Detalle</a>                 
                <a href="{!! 'cita/'.$cita->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/citas/'.$cita->id]) !!}
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
