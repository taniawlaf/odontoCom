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
        @foreach($clinicas as $clinica)
        <tr>
            <td>{!! $clinica->id !!}</td>
            <td>{!! $clinica->id_pais !!}</td>
            <td>{!! $clinica->id_entidad !!}</td>
            <td>{!! $clinica->id_municipio!!}</td>
            <td>{!! $clinica->institucion!!}</td>           
            <td>{!! $clinica->numero !!}</td>
            <td>{!! $clinica->nombre !!}</td>
            <td>
                <a href="{!! 'clinica/'.$clinica->id !!}">Detalle</a>                 
                <a href="{!! 'clinica/'.$clinica->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/clinica/'.$clinica->id]) !!}
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
