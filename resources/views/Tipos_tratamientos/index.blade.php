<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver tiposTratamientos</title>
</head>
<body>
    <h1>Listado de tiposTratamientos</h1>
    <a href="tiposTratamientos/create">Crear un nueva tipo</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th> 
            <th>semestre</th>            
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($tiposTratamientos as $tipo)
        <tr>
            <td>{!! $tipo->id !!}</td>
            <td>{!! $tipo->nombre !!}</td>
            <td>{!! $tipo->semestre!!}</td>           
            <td>{!! $tipo->status !!}</td>
            <td>
                <a href="{!! 'tiposTratamientos/'.$tipo->id !!}">Detalle</a>                 
                <a href="{!! 'tiposTratamientos/'.$tipo->id.'/edit' !!}">Editar</a>


                {!! Form::open(['method' => 'DELETE' , 'url' => '/tiposTratamientos/'.$tipo->id]) !!}
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
