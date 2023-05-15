<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de consultorio</title>
</head>
<body>
    
    <h1>Detalle de consultorio</h1>

    <h2>Id consultorio: {!! $consultorios->id !!}</h2>

    <h2>Numero del consultorio: {!! $consultorios->numero !!}</h2>

    <h2>Nombre del alumno: {!! $consultorios->usuario->nombre !!}</h2>

    <h2>Nombre de la institucion: {!! $consultorios->clinica->institucion !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>