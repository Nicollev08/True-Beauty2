<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">SERVICIOS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->id}}</td>
                <td>
                    <img src="{{ asset('storage/' . $service->image) }}" alt="Imagen" style="max-width: 100px;">
                </td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>

                <td>
                    <button type="button" class="btn btn-outline-success btn-actualizar" data-bs-toggle="modal" data-bs-target="#editModal{{ $service->id }}">ACTUALIZAR</button>
                      <form method="post" action="{{ route('services.destroy', ['service' => $service->id]) }}" style="display: inline;">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-outline-danger" name="eliminar">ELIMINAR</button>
                      </form>
                   </td>
            </tr>
            @endforeach
        </tbody>
    </table>


      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo servicio
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo servicio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data" class="row gy-2 gx-3 align-items-center">
                        @csrf
                        <input type="hidden" name="id" id="id" value="">
                        <div class="col-auto">
                            <label class="visually-hidden" for="name">Nombre de servicio</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="precio">Descripcion</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Imagen</label>
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


    <!-- FORM ACTUALIZAAAR -->
 @foreach($services as $service)
 <div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar servicio</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('services.update', $service->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-auto">
                    <label class="visually-hidden" for="name">Nombre servicio</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}" placeholder="Nombre">
                </div>
                <div class="col-auto">
                    <label class="visually-hidden" for="precio">Precio</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $service->description }}" placeholder="Precio">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Imagen actual</label>
                    <img src="{{ asset('storage/' . $service->image) }}" alt="Imagen actual" style="max-width: 100px;">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Cargar nueva imagen (opcional)</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
        
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
      </div>
  </div>
</div>
@endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>