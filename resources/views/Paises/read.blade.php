<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Pais</title>
</head>
<body>
    
    <h1>Detalle de pais</h1>

    <h2>Nombre: {!! $pais->nombre !!}</h2>

    <h2>Clave: {!! $pais->clave !!}</h2>

    <h2>Status: {!! $pais->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>