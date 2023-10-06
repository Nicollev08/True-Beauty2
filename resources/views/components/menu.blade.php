<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="{{ url('assets/css/menu.css') }}">

    <title>menucito</title>
</head>
<body>
    <header action="/index" class="header">

        <a href="#home" class="logo">
            <img src="/IMG/logo.png" alt="">
            
        </a>
    
        <nav class="navbar navbar-default">
            
            <a style="text-decoration:none" href="#home">Inicio</a>
            <a style="text-decoration:none" href="#about">¿Quiénes somos?</a>
            <a style="text-decoration:none" href="#servicios">Servicios</a>
            <a style="text-decoration:none" href="#catalogo">Agendar cita</a>
            <a style="text-decoration:none" href="{{route('productos.index')}}">Productos</a>
            <a style="text-decoration:none" href="#redes">Redes</a>
        </nav>
    </header>
    <script src="JS/index.js"></script>
</body>
</html>
