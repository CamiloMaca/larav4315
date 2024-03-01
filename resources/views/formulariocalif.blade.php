<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('calif.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese su nombre :
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingrese su primera nota:
    <br>
    <input type="number" name="nota1" step="0.01">
</label>
<br>
<label>
    Ingrese su segunda nota:
    <br>
    <input type="number" name="nota2" step="0.01">
</label>
<br>
<label>
    Ingrese su tercera nota:
    <br>
    <input type="number" name="nota3" step="0.01">
</label>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>