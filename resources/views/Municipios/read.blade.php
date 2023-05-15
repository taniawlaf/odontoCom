<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Municipio</title>
</head>
<body>
    
    <h1>Detalle de municipio</h1>

    <h2>Id municipio: {!! $municipio->id_entidad !!}</h2>

    <h2>Nombre de la entidad: {!! $municipio->entidade->nombre !!}</h2>

    <h2>Nombre del pais: {!! $municipio->entidade->paise->nombre !!}</h2>

    <h2>Nombre municipio: {!! $municipio->nombre !!}</h2>

    <h2>Status: {!! $municipio->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>