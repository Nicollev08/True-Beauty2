<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/IMG/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ url('assets/css/services.css') }}">
    <title>SERVICIOS</title>
</head>
<body>

  <x-menu />

  <main>
    <section class="servicios">
      
          <div class="row">
              <div class="section__title2">
                  <h1>SERVICIOS</h1>
                  <span></span>
              </div>
          </div>
      {{-- <div class="servicecontent">
         <div class="services">
          <div class="service-item">
            <div class="services__image"><img src="/IMG.ff.jpg"></div>
            <div class="services__texts">
              <h2 class="services__title">MANICURE</h2>
              <p class="services__paragraph">Dale un toque de estilo a tus manos! 💅 Descubre la magia de nuestras manicuras profesionales. Colores vibrantes, diseños elegantes y un cuidado impecable para tus uñas. Reserva tu cita y deja que tus manos hablen por ti.</p>
              <a href="#" class="services__cta">Ver más</a>
            </div>
          </div> --}}
    
          @foreach($services as $service)
          <div class="service-item">
            <div class="services__image"><img src="{{ asset('storage/' . $service->image) }}"></div>
            <div class="services__texts">
              <h2 class="services__title">{{ $service->name }}</h2>
              <p class="services__paragraph">{{ $service->description }}</p>
              <a href="#" class="services__cta">Ver más</a>
            </div>
          </div>
        @endforeach
          
         </div>

        

      </div>
      <a href="/home"class="opbtn1">REGRESAR</a>
     
  </section>
  </main>

  
</body>
</html>
