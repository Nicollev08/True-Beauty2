<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
    <link rel="shortcut icon" href="/IMG/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('assets/css/password.css') }}">
</head>
<body>

    <div class="form-box" >

        <form action="/password" class="form-register" class="form-box animated fadeInUp" width="200" height="200">
            @csrf
            <div class="contenedor">
                <img class="class" src="/IMG/logo.png" >
           </div>

            <h4 >RECUPERAR CONTRASEÑA</h4>
            <input class="form-contra" type="email" name="Correo" id="Correo" placeholder="Ingrese su Correo" autofocus >

            <button class="button" type="submit">Enviar</button>
            <a class="link" href="/login">Volver</a>

        </form>


    </div>




    
</body>
</html>