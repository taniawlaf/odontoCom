<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de material</title>
</head>
<body>
    
    <h1>Detalle de material</h1>

    <h2>Id material: {!! $material->id !!}</h2>

    <h2>Nombre del material: {!! $material->nombre !!}</h2>

    <h2>Descripcion: {!! $material->descripcion!!}</h2>

    <h2>Status: {!! $material->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>