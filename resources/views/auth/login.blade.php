<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
    <link rel="shortcut icon" href="/IMG/logotrue.png" type="image/x-icon">
    <title>Iniciar sesión</title>
</head>

<body>
    
    <div class="form-box">
         
        <form action="/login" method="POST" class="form-register" class="form-box animated fadeInUp" width="200" height="200">
            @csrf
            <div class="contenedor">
                <img class="class" src="/IMG/logo.png" >
           </div>
        
            <h4 class="form-title">INICIAR SESIÓN</h4>
            
            
            <input type="text" name="name" placeholder="Ingrese su nombre" autofocus>
            <input type="password" name="password" placeholder="Ingrese su contraseña">
            <a class="link" href="/contra">Recuperar Contraseña</a>

            <button class="button" type="submit">Ingresar</button>
            <br>

            <label class="cuenta">¿Aún no tienes cuenta?</label>
            <a class="link" href="/register" class="btn" >Regístrate </a>
            
        </form>
    </div>
    
</body>
</html>