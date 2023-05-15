<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Entidad</title>
</head>
<body>
    
    <h1>Detalle de entidad</h1>

    <h2>Clave de pais: {!! $entidad->paise->clave !!}</h2>

    <h2>Pais: {!! $entidad->paise->nombre !!}</h2>

    <h2>Nombre: {!! $entidad->nombre !!}</h2>

    <h2>Status: {!! $entidad->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>