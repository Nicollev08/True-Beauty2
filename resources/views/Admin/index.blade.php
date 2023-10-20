<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMIN</title>
</head>
<body>

  <h1>¿QUÉ DESEAS REALIZAR?</h1>
  <div class="cruds">
    <a href="/crudtips">Nuevo Tip</a>
    <a href="/crudproduct">Nuevo Producto</a>
    <a href="/crudservices">Nuevo Servicio</a>
    <a href="#">Agendar cita</a>
    <a href="/users">Usuarios</a>
  </div>
  

  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('/IMG/fondo6.jpg');
      background-size: cover; 
      background-position: center; 
      background-repeat: no-repeat; 
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh; 
    }

    .cruds {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 20px; 
    }

    h1 {
      text-align: center;
      color: #333;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8);
    }

    a {
      width: 200px;
      display: block;
      padding: 10px;
      margin: 10px;
      text-align: center;
      text-decoration: none;
      color: #fff;
      background-color: rgb(219, 103, 149);
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    a:hover {
      background-color: #be5190;
    }
  </style>

</body>
</html>