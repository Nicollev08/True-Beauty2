<!DOCTYPE html>
<html>
<head>
    <title>Formulario productos</title>
</head>
<body>
    <h1>Formulario productos</h1>
    <form action="{{route('productos.store')}}" method="Post" enctype="multipart/form-data"> 
        @csrf
        <label for="nombre">Nombre :</label>
        <input type="text" id="nombre" name="name" required><br><br>

        <label for="descripcion">descripcion:</label>
        <input type="text" id="decripcion" name="description" required><br><br>
        <input type="file" name="imagen">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
