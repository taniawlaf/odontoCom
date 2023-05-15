<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de tratamiento</title>
</head>
<body>
    
    <h1>Detalle de tratamiento</h1>

    <h2>Id tratamiento: {!! $tratamientos->id !!}</h2>

    <h2>Nombre del tratamiento: {!! $tratamientos->nombre !!}</h2>

    <h2>Descripcion: {!! $tratamientos->descripcion!!}</h2>

    <h2>Costo: {!! $tratamientos->costo!!}</h2>

    <h2>Tipo de Tratamiento: {!! $tratamientos->tipos_tratamiento->nombre !!}</h2>

    <h2>Status: {!! $tratamientos->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>