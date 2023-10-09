<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/register.css') }}">
    <link rel="shortcut icon" href="/IMG/logo.png" type="image/x-icon">
    <title>Nuevo registro</title>
</head>
<body>

  

    <div class="form-box"> 
        
      
        <form action="/register" method="POST" class="form-register" class="form-box animated fadeInUp" width="200" height="200">
            @csrf
            <div class="contenedor">
                <img class="class" src="/IMG/logo.png" >
           </div>
            <h4>REGISTRO</h4>
            <input type="text" name="name" id="name" placeholder="Ingrese su Nombre" autofocus>
            <input type="text" name="lastname" id="lastname" placeholder="Ingrese su Apellido" autofocus>
            <input type="text" name="email" id="email" placeholder="Ingrese su Correo Elec" autofocus>
            <input type="text" name="phone" id="phone" placeholder="Ingrese su Teléfono" autofocus >
            <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña" autofocus>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme su contraseña" autofocus >

            <div class="redes">
                <a href="https://es-la.facebook.com"><img class="IMG" src="/IMG/facebook.jpg" ></a>
                <a href="https://www.google.com/intl/es-419/gmail/about/"><img class="IMG" src="/IMG/google.jpg"></a>
            </div>
            <br>
            <a class="link" href="#"> Términos y condiciones</a>
            
            <button class="button" type="submit">Registrarse</button>
         
            <p><a class="link"  href="/login">Ya tengo cuenta</a></p>
           
        </form>
    </div>
    


</body>
</html>