<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('factura.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    id cliente:
    <br>
    <input type="number" name="client_id">
</label>
<br>
<label>
    Total:
    <br>
    <input type="number" name="total">
</label>
<br>
<label>
    Descripcion:
    <br>
    <input type="text" name="description">
</label>
<br>


<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>