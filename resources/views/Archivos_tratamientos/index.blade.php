<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver archivosTratamientos</title>
</head>
<body>
    <h1>Listado de archivosTratamientos</h1>
    <a href="archivosTratamientos/create">Crear un nuevo archivo</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID id_tratamiento</th>
            <th>ruta</th>        
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($archivosTratamientos as $archivos)
        <tr>
            <td>{!! $archivos->id !!}</td>
            <td>{!! $archivos->id_tratamiento !!}</td>
            <td>{!! $archivos->ruta!!}</td>
            <td>{!! $archivos->status !!}</td>           
            
            <td>
                <a href="{!! 'archivosTratamientos/'.$archivos->id !!}">Detalle</a>                 
                <a href="{!! 'archivosTratamientos/'.$archivos->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/archivos/'.$archivos->id]) !!}
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