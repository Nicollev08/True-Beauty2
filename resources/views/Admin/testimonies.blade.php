<!DOCTYPE html>
<html>
<head>
    <title>Testimonios</title>
</head>
<body>
    <h1>Testimonios</h1>
    <form action="{{route('testimonies.store')}}" method="Post" enctype="multipart/form-data"> 
        @csrf
        <label for="descripcion">descripcion:</label>
        <input type="text" id="descripcion" name="description" required><br><br>
     

        <input type="submit" value="Enviar">
    </form>

    @foreach( $testimonies as $row )
    <h1>{{ $row->description }}</h1>
        
    @endforeach
</body>
</html>
