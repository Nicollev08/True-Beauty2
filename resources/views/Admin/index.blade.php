<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>VISTA DE ADMIN</h1>
     <form action="{{route('home.services')}}" method="Post" enctype="multipart/form-data"> 
        @csrf
        <label for="nombre">Nombre :</label>
        <input type="text" id="nombre" name="name" required><br><br>

        <label for="descripcion">Descripcion:</label>
        <input type="text" id="decripcion" name="description" required><br><br>
        <input type="file" name="imagen">

        <input type="submit" value="Enviar">
    </form> 
</body>
</html>