<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de tiposTratamiento</title>
</head>
<body>
    
    <h1>Detalle de tiposTratamiento</h1>

    <h2>Id tipo de Tratamiento: {!! $tiposTratamiento->id !!}</h2>

    <h2>Nombre del tipo de Tratamiento: {!! $tiposTratamiento->nombre !!}</h2>

    <h2>Semestre: {!! $tiposTratamiento->semestre!!}</h2>

    <h2>Status: {!! $tiposTratamiento->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>