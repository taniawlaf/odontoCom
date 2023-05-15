<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Usuario</title>
</head>
<body>
    
    <h1>Detalle de Usuario</h1>

    <h2>Id usuario: {!! $Usuario->id !!}</h2>

    <h2>Nombre: {!! $Usuario->nombre !!}</h2>

    <h2>Ap paterno: {!! $Usuario->ap_pat !!}</h2>

    <h2>Ap materno: {!! $Usuario->ap_mat !!}</h2>

    <h2>email: {!! $Usuario->email!!}</h2>

    <h2>telefono: {!! $Usuario->telefono!!}</h2>

    <h2>Status: {!! $Usuario->status !!}</h2>

    <h2>Nombre de la entidad: {!! $Usuario->municipio->nombre !!}</h2>

    <h2>Nombre de la entidad: {!! $Usuario->entidade->nombre !!}</h2>

    <h2>Nombre del pais: {!! $Usuario->entidade->paise->nombre !!}</h2>

    <br />

    <a href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>