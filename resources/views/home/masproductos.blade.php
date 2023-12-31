<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/IMG/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('assets/css/productos.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PRODUCTOS</title>
</head>
<body>

	<!--MENU-->
    <x-menu />


	<main>
		
		<section class="products">
		
			<div class="row">
				<div class="section__title2">
					<h1>CATÁLOGO DE PRODUCTOS</h1>
					<span>Ven y aprovecha todas nuestras promociones</span>
				</div>
			</div>
			
			<div class="productscontent">
				<div class="all-products">  
					@foreach($products as $product)
					<div class="product">
						<img src="{{ asset('storage/' . $product->image) }}" alt="">
						<div class="product-info">
							<h4 class="product-title">{{ $product->name }}
							</h4>
							<p class="product-price">{{ $product->precio }}</p>
							<a class="product-btn" href="#">Descripción</a>
		
						</div>
					</div>
					
					@endforeach

				</div>
				<a href="/home"class="opbtn2">REGRESAR</a>
			</div>
			
		</section>
	</main>

</body>
</html>