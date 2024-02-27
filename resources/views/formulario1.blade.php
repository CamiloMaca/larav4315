<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('cliente.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese su nombre :
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingrese su numero de telefono:
    <br>
    <input type="number" name="telefono">
</label>
<br>
<label>
    Ciudad de recidencia:
    <br>
    <input type="text" name="city">
</label>
<br>
<label>
    nombre del barrio:
    <br>
    <input type="text" name="street_address">
</label>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>