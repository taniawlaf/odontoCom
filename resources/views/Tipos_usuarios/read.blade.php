<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de tipos de Usuario</title>
</head>
<body>
    
    <h1>Detalle de tipos de Usuario</h1>

    <h2>Id tiposUsuario: {!! $tiposUsuario->id !!}</h2>

    <h2>Nombre del tipo de Usuario: {!! $tiposUsuario->nombre !!}</h2>

    <h2>Nivel: {!! $tiposUsuario->nivel!!}</h2>

    <h2>Status: {!! $tiposUsuario->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>