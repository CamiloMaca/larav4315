<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('empleado.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    numero de contrato:
    <br>
    <input type="number" name="contract_number">
</label>
<br>
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Edad:
    <br>
    <input type="number" name="age">
</label>
<br>
<label>
    posicion:
    <br>
    <input type="text" name="position">
</label>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>