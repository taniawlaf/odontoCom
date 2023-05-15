<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de clinica</title>
</head>
<body>
    
    <h1>Detalle de clinica</h1>

    <h2>Id clinica: {!! $clinica->id_entidad !!}</h2>

    <h2>Nombre de la clinica: {!! $clinica->municipio->nombre !!}</h2>

    <h2>Nombre de la entidad: {!! $clinica->entidade->nombre !!}</h2>

    <h2>Nombre del pais: {!! $clinica->entidade->paise->nombre !!}</h2>

    <h2>Institucion: {!! $clinica->institucion !!}</h2>

    <h2>Clinica: {!! $clinica->nombre !!}</h2>

    <h2>Numero: {!! $clinica->numero !!}</h2>

    <h2>Status: {!! $clinica->status !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>