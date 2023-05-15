<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de cita</title>
</head>
<body>
    
    <h1>Detalle de cita</h1>

    <h2>Id cita: {!! $cita->id !!}</h2>

    <h2>Fecha y hora de la cita: {!! $cita->fecha !!}</h2>

    <h2>Nombre del paciente: {!! $cita->usuario->nombre !!}</h2>

    <h2>Nombre del tratamiento: {!! $cita->tratamiento->nombre !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>