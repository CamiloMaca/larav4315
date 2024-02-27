<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    ingrese el nombre del producto:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    ingrese el valor del producto:
    <br>
    <input type="num" name="price">
</label>


<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>