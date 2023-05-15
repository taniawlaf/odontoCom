<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver clinicas</title>
</head>
<body>
    <h1>Listado de clinicas</h1>
    <a href="clinicas/create">Crear un nueva clinica</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ID pais</th>
            <th>ID entidad</th>
            <th>ID municipio</th>
            <th>institucion</th>
            <th>numero</th>            
            <th>nombre</th>
            <th>Acciones</th>
            
        </tr>
        @foreach($clinica as $clinicas)
        <tr>
            <td>{!! $clinicas->id !!}</td>
            <td>{!! $clinicas->id_pais !!}</td>
            <td>{!! $clinicas->id_entidad !!}</td>
            <td>{!! $clinicas->id_municipio!!}</td>
            <td>{!! $clinicas->institucion!!}</td>           
            <td>{!! $clinicas->numero !!}</td>
            <td>{!! $clinicas->nombre !!}</td>
            <td>
                <a href="{!! 'clinicas/'.$clinicas->id !!}">Detalle</a>                 
                <a href="{!! 'clinica/'.$clinicas->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/clinica/'.$clinicas->id]) !!}
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
