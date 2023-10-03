
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUE BEAUTY</title>
    
    <link rel="shortcut icon" href="/IMG/logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{ url('assets/css/index.css') }}">
    
</head>
<body>
    
    <!--MENU-->
    
    <x-menu />

    
    <!-- MAIN CONTENT -->
    <main>
        <!-- HOME SECTION -->
        <section class="home" id="home">
            <div class="content">
                <h1><b>TRUE BEAUTY</b></h1>
                <br>
                <p>Enamórate de cuidarte</p>
                <p>Enamórate de ti.</p>
                <a href="#" class="btn btn__outline"><i class="fa-solid fa-calendar-days"></i>   Agendar cita   </a>
            </div>
        </section>
       <!--TIPS-->
       <section class="tips">
        <div class="row">
            <div class="section__title2">
                <h1>TIPS DE BELLEZA</h1>
                <span></span>
            </div>
        </div>
        <div class="tipcontainer">
            <div class="tip">
                <div class="imgBx">
                    <img src="/IMG/arroz.jpg" alt="">
                </div>
                <div class="content">
                    <h2>CARD UNO</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ratione quaerat totam optio quidem, porro voluptatum libero animi? Maiores ad amet quia quasi placeat! Facere earum hic maiores quia sapiente?</p>
                </div>
            </div>
            <div class="tip">
                <div class="imgBx">
                    <img src="/IMG/arroz.jpg" alt="">
                </div>
                <div class="content">
                    <h2>CARD DOS</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ratione quaerat totam optio quidem, porro voluptatum libero animi? Maiores ad amet quia quasi placeat! Facere earum hic maiores quia sapiente?</p>
                </div>
            </div>
            <div class="tip">
                <div class="imgBx">
                    <img src="/IMG/arroz.jpg" alt="">
                </div>
                <div class="content">
                    <h2>CARD TRES</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ratione quaerat totam optio quidem, porro voluptatum libero animi? Maiores ad amet quia quasi placeat! Facere earum hic maiores quia sapiente?</p>
                </div>
            </div>
            
        </div>
        <div class="tipcontainer">
            <div class="tip">
                <div class="imgBx">
                    <img src="/IMG/arroz.jpg" alt="">
                </div>
                <div class="content">
                    <h2>CARD CUATRO</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ratione quaerat totam optio quidem, porro voluptatum libero animi? Maiores ad amet quia quasi placeat! Facere earum hic maiores quia sapiente?</p>
                </div>
            </div>
            <div class="tip">
                <div class="imgBx">
                    <img src="/IMG/arroz.jpg" alt="">
                </div>
                <div class="content">
                    <h2>CARD CINCO</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ratione quaerat totam optio quidem, porro voluptatum libero animi? Maiores ad amet quia quasi placeat! Facere earum hic maiores quia sapiente?</p>
                </div>
            </div>
            <div class="tip">
                <div class="imgBx">
                    <img src="/IMG/arroz.jpg" alt="">
                </div>
                <div class="content">
                    <h2>CARD SEIS</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ratione quaerat totam optio quidem, porro voluptatum libero animi? Maiores ad amet quia quasi placeat! Facere earum hic maiores quia sapiente?</p>
                </div>
            </div>
        </div>
    
       </section>
     
        <!-- ABOUT US SECTION -->
        <section class="about" id="about">
            <div class="about__content">
                <div class="row">
                    <div class="section__title2">
                        <h1>¿QUIÉNES SOMOS?</h1>
                        <span></span>
                    </div>
                </div>
                <div class="about__container container">
                    <img src="/IMG/leftarrow.svg" class="about__arrow" id="before">
            
                    <section class="about__body about__body--show" data-id="1">
                        <div class="about__texts">
                            <h2 class="subtitle">Mi nombre es Laura Vidal, <span class="about__course">estudiante de 
                                ADSO.</span></h2>
                            <p class="about__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                                esse, asperiores eaque totam nulla repudiandae quasi, deserunt culpa exercitationem
                                blanditiis laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                        </div>
            
                        <figure class="about__picture">
                            <img src="/IMG/laura.jpg" class="about__img">
                        </figure>
                    </section>
            
                    <section class="about__body" data-id="2">
                        <div class="about__texts">
                            <h2 class="subtitle">Mi nombre es Nicole García, <span class="about__course">estudiante de
                                   ADSO.</span></h2>
                            <p class="about__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                                esse, asperiores eaque laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione
                                voluptatum!</p>
                        </div>
            
                        <figure class="about__picture">
                            <img src="/IMG/nicole.jpg" class="about__img">
                        </figure>
                    </section>
            
                    <section class="about__body" data-id="3">
                        <div class="about__texts">
                            <h2 class="subtitle">Mi nombre es Alejandro Suárez, <span class="about__course">estudiante de
                                ADSO.</span></h2>
                            <p class="about__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                                esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                        </div>
            
                        <figure class="about__picture">
                            <img src="/IMG/alejo.jpg" class="about__img">
                        </figure>
                    </section>
            
                    <section class="about__body" data-id="4">
                        <div class="about__texts">
                            <h2 class="subtitle">Mi nombre es Mauricio Campos, <span class="about__course">estudiante de
                                ADSO.</span></h2>
                            <p class="about__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                                esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                        </div>
            
                        <figure class="about__picture">
                            <img src="/IMG/mauricio.jpg" class="about__img">
                        </figure>
                    </section>
            
                    <img src="/IMG/rightarrow.svg" class="about__arrow" id="next">
                </div>
            </div>
        </section>

        <!-- SERVICES SECTION -->
        <section class="services section" id="services">
            <div class="services__content">
                <div class="row">
                    <div class="section__title2">
                        <h1>SERVICIOS</h1>
                        <span>QUE REALIZAMOS</span>
                    </div>
                </div>
                <div class="services__content__descripion grid container">
                    <div class="box">
                        <div class="inner">
                            <img src="/IMG/manicure.png" alt="">
                            <p>MANICURE</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="/IMG/pedicure.png" alt="">
                            <p>PEDICURE</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="/IMG/maquiagem.png" alt="">
                            <p>MAQUILLAJE</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="/IMG/pentado.png" alt="">
                            <p>TRATAMIENTOS</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="/IMG/corte.png" alt="">
                            <p>CORTES</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="/IMG/sobrancelha.png" alt="">
                            <p>CEJAS Y PESTAÑAS</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="/IMG/depilacao.png" alt="">
                            <p>DEPILACIÓN</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="/IMG/limpeza.png" alt="">
                            <p>LIMPIEZA FACIAL</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUCTS SECTION -->
        <section class="package section" id="productos">
            <div class="package_-content">
                <div class="row">
                    <div class="section__title2">
                        <h1>PRODUCTOS</h1>
                        <span></span>
                    </div>
                </div>
                <div class="package__cards row container">
                    <div class="product">
                        <div class="product__title">
                            <h1>Bronze</h1>
                        </div>
                        <div class="product__items">
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Penteado</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Maquiagem</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Unhas<span>(tradicional francesa)</span></p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Depilação<span>(1 area)</span></p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Design de sobrancelha</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Limpeza de pele</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Sala de noiva reservada</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Mesa de frutas</p>
                            </div>
                            <button class="btn">quero esse</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product__title">
                            <h1>Prata</h1>
                        </div>
                        <div class="product__items">
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Penteado</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Maquiagem</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Unhas<span>(tradicional francesa)</span></p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Depilação<span>(1 area)</span></p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Design de sobrancelha</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Limpeza de pele</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Sala de noiva reservada</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Mesa de frutas</p>
                            </div>
                            <button class="btn">quero esse</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product__title">
                            <h1>Ouro</h1>
                        </div>
                        <div class="product__items">
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Penteado</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Maquiagem</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Unhas<span>(tradicional francesa)</span></p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Depilação<span>(1 area)</span></p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Design de sobrancelha</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Limpeza de pele</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Sala de noiva reservada</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-x x__icon' ></i>
                                <p class="not">Mesa de frutas</p>
                            </div>
                            <button class="btn">quero esse</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product__title">
                            <h1>Diamante</h1>
                        </div>
                        <div class="product__items">
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Penteado</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Maquiagem</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Unhas<span>(tradicional francesa)</span></p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Depilação<span>(1 area)</span></p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Design de sobrancelha</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Limpeza de pele</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Sala de noiva reservada</p>
                            </div>
                            <div class="item">
                                <i class='bx bx-message-square-check check__icon' ></i>
                                <p>Mesa de frutas</p>
                            </div>
                            <button class="btn">quero esse</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS SECTION -->
        <section class="testimonials section" id="testimonios">
            <div class="row">
                <div class="section__title2">
                    <h1>TESTIMONIOS</h1>
                    <span>Veja o que nossos clientes tem a dizer</span>
                </div>
            </div>
            <div class="testimonials__content">
                
                <div class="testimonials__card container grid">
                    <div class="testimonials__item flex">
                        <div class="testimonials__img">
                            <img src="/IMG/fondo1.jpg" alt="">
                        </div>
                        <div class="testimonials__box">
                            <div class="testimonials__name">
                                <h1>Celaena</h1>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                            </div>
                            <div class="testimonials__descripition">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Quidem quo saepe quibusdam nobis quas minima!</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__item flex">
                        <div class="testimonials__img">
                            <img src="/IMG/fondo2.jpg" alt="">
                        </div>
                        <div class="testimonials__box">
                            <div class="testimonials__name">
                                <h1>Aelin</h1>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                            </div>
                            <div class="testimonials__descripition">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Quidem quo saepe quibusdam nobis quas minima!</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__item flex">
                        <div class="testimonials__img">
                            <img src="/IMG/fondo3.jpg" alt="">
                        </div>
                        <div class="testimonials__box">
                            <div class="testimonials__name">
                                <h1>Luciana</h1>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                            </div>
                            <div class="testimonials__descripition">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Quidem quo saepe quibusdam nobis quas minima!</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__item flex">
                        <div class="testimonials__img">
                            <img src="/IMG/fondo4.jpg" alt="">
                        </div>
                        <div class="testimonials__box">
                            <div class="testimonials__name">
                                <h1>Patricia</h1>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                                <i class='bx bxs-star star__icon' ></i>
                            </div>
                            <div class="testimonials__descripition">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Quidem quo saepe quibusdam nobis quas minima!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63778.38371264201!2d-76.64113390351599!3d2.4574700696484055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e300311c028d47d%3A0x880bd67f0987a54e!2zUG9wYXnDoW4sIENhdWNh!5e0!3m2!1ses!2sco!4v1694665767523!5m2!1ses!2sco" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


    <!-- FOOTER -->
    <footer class="footer" id="redes">
        <div class="footer__list section container grid">
            <div class="footer__data">
                <h1>TRUE BEAUTY</h1>
                <div class="footer__data-social">
                    <a href=""><i class='bx bxl-facebook social__icon'></i></a>
                    <a href=""><i class='bx bxl-instagram social__icon' ></i></a>
                    <a href=""><i class='bx bxl-whatsapp social__icon' ></i></a>
                </div>
            </div>
            <div class="footer__data">
                <h2>Dirección</h2>
                <p>El recuerdo <br> Calle 11b #23-44</p>
            </div>
            <div class="footer__data">
                <h2>Horario</h2>
                <p>Lunes a sábado<br>07:00 am a 07:00 pm</p>
            </div>
            <div class="footer__data">
                <h2>Contacto</h2>
                <p>(+57) 323-446-41-53</p>
                <p>(+57) 314-759-48-42</p>
            </div>
        </div>
        <div class="copy">
            <p>Todos los derechos son reservados</p>
            <span>ADSO MOR</span>
        </div>
    </footer>
    <!-- JavaScript -->
    <script src="JS/index.js"></script>
    
</body>
</html>
