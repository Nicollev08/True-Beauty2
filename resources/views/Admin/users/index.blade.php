<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Usuarios</title>
</head>
<body>
    
    <h1>Lista de usuarios </h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Foto de perfil</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $user->image) }}" alt="Foto de perfil" style="max-width: 100px;">
                    </td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-actualizar" data-bs-toggle="modal" data-bs-target="#editModal{{ $user->id }}">ACTUALIZAR</button>
                        <form method="post" action="{{ route('user.destroy', ['user' => $user->id]) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" name="eliminar">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    
      
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo usuario
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data" class="row gy-2 gx-3 align-items-center" >
                    @csrf
                    <div class="col-md-6">
                        <label for="">Nombre</label>
                        <input type="text" name="name"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Apellido</label>
                        <input type="text" name="lastname"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Teléfono</label>
                        <input type="text" name="phone"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Correo</label>
                        <input type="text" name="email"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Contraseña</label>
                        <input type="password" name="password" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="image">Foto de perfil</label>
                        <input class="form-control" type="file" id="image" name="image">
                      </div>
                  
                      <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div> 


    {{-- ACTUALIZAAAAR --}}

    
    @foreach($users as $user)
    <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR USUARIO</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <form method="POST" enctype="multipart/form-data" action="{{ route('user.update', $user->id) }}">
          @csrf

           @method('PUT')  


          <div class="col-md-8 border-right">
              <div class="p-3 py-3">
  
                  <input type="hidden" name="id" id="id" value="{{ $user->id }}">
  
                  <div class="col-md-6">
                      <label for="name">Nombre</label>
                      <input type="text" name="name" value="{{ $user->name }}" >
                  </div>
                  <div class="col-md-6">
                      <label for="lastname">Apellido</label>
                      <input type="text" name="lastname" value="{{ $user->lastname }}" >
                  </div>
                  <div class="col-md-6">
                      <label for="phone">Teléfono</label>
                      <input type="text" name="phone" value="{{ $user->phone }}" >
                  </div>
                  <div class="col-md-6">
                      <label for="email">Correo</label>
                      <input type="text" name="email" value="{{ $user->email }}" >
                  </div>
                
                  <div class="mb-3">
                    <label class="form-label" for="image">Imagen actual</label>
                    <img src="{{ asset('storage/' . $user->image) }}" alt="Imagen actual" style="max-width: 100px;">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Cargar nueva imagen (opcional)</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
  
                  <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
          </div>
      </form>
  </div>
      
</div>
</div>
</div>
@endforeach
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>