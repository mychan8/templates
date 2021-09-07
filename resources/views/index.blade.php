@extends('layouts.template')

@section('title')
	<div style="text-align: center">
		<h5 style="color: gray;">¡Bienvenidos a</h5>
		<h1 style="color: red;">Viandas Pop!</h1>
	</div>
@endsection

@section('subtitle')
	<div style="text-align: center; color: white;">
		<h3 style="margin-bottom: 20px;">¡Viandas ricas, recién hechas y saludables!</h3>
	</div>
@endsection

@section('main')
<div class="flex-item">
	<img class="post-image" src="{{ URL::asset('img/icon.webp') }}">
	<p class="post-header"> <a href="#">Sin Harinas</a></p>
	<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
	<div class="author">
		<div class="author-content">
			<button class="author-name"><a style="font-size: small" href="#">Ver menú</a></button>
		</div>
	</div>
</div>
@endsection

<!-----

<section class="card shop">
<div class="icon">
  <img src="{{ URL::asset('img/icon.webp') }}" alt="Shop here." />
</div>
<h3>Vegetariano</h3>
<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
<button>Learn More</button>
</section>

<section class="card about">
<div class="icon">
  <img src="{{ URL::asset('img/icon.webp') }}" alt="About us." />
</div>
<h3>Gourmet</h3>
<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
<button>Learn More</button>
</section>

	<div class="main">
	    <div class="card">
	    <div class="post">
	      <img class="post-image" src="{{ URL::asset('img/icon.webp') }}"/>
	      
	        <div class="post-content">
		        <p class="post-header"> <a href="#">Sin harinas</a> </p>
		        <p class="post-text">La opción justa para bajar de peso en forma rápida<br>Son 14 platos seleccionados profesionalmente a base de carne, pollo y pescado con guarnición de verduras.<br>Es un menu fijo, pero podes hacer hasta dos cambios si algo no te gusta. Las viandas vienen en 150 cal, y 300 cal. Es el mismo menú y lo que cambia es la porción.</p>
			</div>
    	</div>
        </div>
      </div>----->


		<!----
			 SIN HARINAS
			<div style="background: gray">
				<h5><a href="{{ URL::asset('menu/harinas') }}">Menú sin Harinas</a></h5>
					<div style="background: black">
						<p>La opción justa para bajar de peso en forma rápida.</p>
					</div>
					<div style="background: black">
						<p>Son 14 platos seleccionados profesionalmente a base de carne, pollo y pescado con guarnición de verduras.</p>
					</div>
					<div style="background: black">
						<p>Es un menu fijo, pero podes hacer hasta dos cambios si algo no te gusta. Las viandas vienen en 150 cal, y 300 cal. Es el mismo menú y lo que cambia es la porción.</p>
					</div>
			</div>
			GOURMET
			<div style="background: gray">
				<h5><a href="{{ URL::asset('menu/gourmet') }}">Menú Gourmet</a></h5>
				<div style="background: black">
					<p>Los platos los elegís vos, para que comas equilibradamente, y te damos la opción de elegir 7 platos a base de carne, pollo o pescado (hasta 3 de cada uno, pero en un total de 7) y 7 a base de verduras, legumbres y hortalizas, tartas, o pastas.</p>
				</div>
				<div style="background: black">
					<p>Las viandas vienen en tres tamaños, 150 cal, 300 cal y Maxi no dieta.</p>
				</div>
				<div style="background: black">
					<p>Las viandas las recibís frescas recién elaboradas para frezar.</p>
				</div>				
			</div>
			<div>
				VEGETARIANO 
				<div style="background: gray">
					<h5><a href="{{ URL::asset('menu/vegetariano') }}">Menú Vegetariano</a></h5>
					<div style="background: black">
						<p>Menú a elección de 14 viandas, a base de verduras y hortalizas, pastas, granos y tartas. Vienen en 150, 300 cal.</p>
					</div>
					<div style="background: black">
						<p>¡Hacenos tu pedido con la mayor de antelación!</p>
					</div>
					<div style="background: black">
						<p>Los envíos se realizan los días miércoles y viernes.</p>
					</div>
				</div>
			</div>
		</div>
		------>