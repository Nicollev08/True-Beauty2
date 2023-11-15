<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPINIONES</title>
    <link rel="stylesheet" href="{{ url('assets/css/opiniones.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!---MODAL--->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Nueva Opinión
</button>  

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Opinión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('comments.store') }}" enctype="multipart/form-data" class="row gy-2 gx-3 align-items-center">
                    @csrf
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-group">
                        <label for="comment">Opinión:</label>
                        <input type="text" name="comment">
                        <div class="rate">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rating" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Comentario</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<section class="testimonials section centered" id="testimonios">
    <div class="row">
        <div class="section__title2">
            <h1>TESTIMONIOS</h1>
            <span>Vea lo que nuestros clientes tienen que decir</span>
        </div>
    </div>
    @foreach($comments as $comment)
    <div class="testimonials__card container grid">
        <div class="testimonials__item flex">
            <div class="testimonials__img">
                <img src="/IMG/mujer1.jpg" alt="">
            </div>
            <div class="testimonials__box">
                <div class="testimonials__name">
                    <h1>Usuario</h1>
                 
                </div>
                <div class="testimonials__description">
                    <p>{{ $comment->comment }}</p>
                    @for($i=1; $i<=$comment->rating; $i++)
                    <label for="star{{$i}}" class="star-label"> <i class='bx bxs-star star__icon' ></i></label>
                    @endfor
                     
                </div>
                
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $comment->id }}">
                    Editar
                </button>
                <form method="POST" action="{{ route('comments.destroy', ['comment' => $comment->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</section>

@foreach($comments as $comment)
<div class="modal fade" id="editModal{{ $comment->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Opinión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('comments.update', ['comment' => $comment->id]) }}" enctype="multipart/form-data" class="row gy-2 gx-3 align-items-center">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{ $comment->id }}">
                    <div class="form-group">
                        <label for="comment">Opinión:</label>
                        <input type="text" name="comment" value="{{ $comment->comment }}">
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Editar Comentario</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>