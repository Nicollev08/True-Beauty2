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
        @csrf
        <a href="/home" class="logo">
            <img src="/IMG/logo.png" alt="">
            
        </a>
    
        <nav class="navbar navbar-default">
            
            <a style="text-decoration:none" href="/home">Inicio</a>
            <a style="text-decoration:none" href="#tips">Tips</a>
            <a style="text-decoration:none" href="#about">¿Quiénes somos?</a>
            <a style="text-decoration:none" href="#servicios">Servicios</a>
            <a style="text-decoration:none" href="{{route('home.masproductos')}}">Productos</a>
            <a style="text-decoration:none" href="#redes">Redes</a>
            @guest
            <div class="dropdown">
                <button class="dropbtn"><i class="fa-solid fa-user-plus" style="color: #fdfdfd;">Ingresa</i></button>
                <div class="dropdown-content">
                    <a class="option" href="/login">Ingresar</a>
                    <a class="option" href="/register">Registrarse</a>
                </div>
            </div>
            @endguest
            @auth
            <div class="dropdown">
                <button class="dropbtn"><i class="fa-solid fa-user-plus" style="color: #fdfdfd;"></i></button>
                <div class="dropdown-content">
                    <a class="option" href="/login">Editar perfil</a>
                    <a class="option" href="/register">Cerrar sesión</a>
                </div>
            </div>
            @endauth
        </nav>
       
    </header>
    
    <script src="JS/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
