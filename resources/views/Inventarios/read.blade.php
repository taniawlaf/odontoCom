<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de inventario</title>
</head>
<body>
    
    <h1>Detalle de inventario</h1>

    <h2>Id inventario: {!! $inventario->id !!}</h2>

    <h2>Existencias: {!! $inventario->existencia !!}</h2>

    <h2>Stock: {!! $inventario->stock !!}</h2>

    <h2>Nombre del material: {!! $inventario->materiale->nombre !!}</h2>

    <h2>Nombre del alumno: {!! $inventario->usuario->nombre !!}</h2>

    <h2>Status: {!! $inventario->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>