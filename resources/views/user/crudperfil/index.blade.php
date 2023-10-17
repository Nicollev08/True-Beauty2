 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PERFIL</title>
</head>
<body>

    <div class="container mt-4">
      
        <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('updateperfil') }}">
            
            @csrf
               <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                @php($image = auth()->user()->image)
                <img class="rounded-circle mt-0" width="250px" height="250px" src="@if($image == null) https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg  @else {{ asset('storage/perfil_image/' .$image) }} @endif" id="image">
                <span class="font-weight-bold">
                    <br>
                    <input type="file" name="image" id="image"  class="form-control">
                </span>
                
            </div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Editar perfil</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">

                    <div class="col-md-6">
                        <label class="labels">Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Apellido</label>
                        <input type="text" name="lastname" disabled class="form-control" value="{{ auth()->user()->lastname }}" placeholder="Apellido">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Teléfono</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
                </div>
               
                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Actualizar</button></div>
            </div>
        </div>
       
    </div>   
          
        </form>
    </div>
</body>
</html> 