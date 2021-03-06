@extends('layouts.template')

@section('pretitle')
	<h5 style="color: gray;">¡Bienvenidos a</h5>
@endsection

@section('subtitle', "¡Viandas saludables, ricas, frescas y listas para freezar!")

@section('main')
<div style="margin: 15px; padding: 5px; background: url('{{ URL::asset('img/background.jpeg') }}');">
	<div class="cards">
		<div class="flex-item">
			<img class="post-image" src="{{ URL::asset('img/sin-harina.webp') }}">
			<p class="post-header"> <a href="#">Sin Harinas</a></p>
			<p class="post-text">La opción justa para bajar de peso en forma rápida<br>Son 14 platos seleccionados profesionalmente a base de carne, pollo y pescado con guarnición de verduras.<br>Es un menu fijo, pero podes hacer hasta dos cambios si algo no te gusta. Las viandas vienen en 150 cal, y 300 cal. Es el mismo menú y lo que cambia es la porción.</p>		
			<div class="author">
				<div class="author-content">
					<button class="author-name"><a style="font-size: small" href="#">Ver menú</a></button>
				</div>
			</div>
		</div>
		<div class="flex-item">
			<img class="post-image" src="{{ URL::asset('img/gourmet.webp') }}">
			<p class="post-header"> <a href="#">Gourmet</a></p>
			<p class="post-text">Los platos los elegís vos, para que comas equilibradamente, y te damos la opción de elegir 7 platos a base de carne, pollo o pescado (hasta 3 de cada uno, pero en un total de 7) y 7 a base de verduras, legumbres y hortalizas, tartas, o pastas.<br>Las viandas vienen en tres tamaños, 150 cal, 300 cal.<br>Las viandas las recibís frescas recién elaboradas para frezar.</p>
			<div class="author">
				<div class="author-content">
					<button class="author-name"><a style="font-size: small" href="#">Ver menú</a></button>
				</div>
			</div>
		</div>
		<div class="flex-item">
			<img class="post-image" src="{{ URL::asset('img/veggie.webp') }}">
			<p class="post-header"> <a href="#">Veggie</a></p>
			<p class="post-text">Menú a elección de 14 viandas, a base de verduras y hortalizas, pastas, granos y tartas. Vienen en 150, 300 cal.<br>Los envíos se realizan los días miércoles y viernes.<br>¡Hacenos tu pedido con la mayor de antelación!</p>
			<div class="author">
				<div class="author-content">
					<button class="author-name"><a style="font-size: small" href="#">Ver menú</a></button>
				</div>
			</div>
		</div>
	</div>
</div>
<marquee behavior="alternate">
	<div style=" display: flex; flex-flow: row wrap;">
		<div style="padding: 10px; margin: 5px;">
			<a href="#"><img src="{{ URL::asset('img/3600.webp') }}"><p style="background-color: white; color: black; text-align: center;">14 viandas de 150 cal</p></a>
		</div>

		<div style="padding: 10px; margin: 5px;">
			<a href="#"><img src="{{ URL::asset('img/4600.webp') }}"><p style="background-color: white; color: black; text-align: center;">14 viandas de 300 cal</p></a>
		</div>

		<div style="padding: 10px; margin: 5px;">
			<a href="#"><img src="{{ URL::asset('img/economy-har.webp') }}"><p style="background-color: white; color: black; text-align: center;">10 viandas de 300 cal</p></a>
		</div>

		<div style="padding: 10px; margin: 5px;">
			<img src="{{ URL::asset('img/3600.webp') }}"><p style="background-color: white; color: black; text-align: center;">14 viandas de 150 cal</p>
		</div>
	</div>
</marquee>
<!--- FAQS ULTIMAS NOTICIAS ---->
<div class="flex">
	<div>
	<h3 class="border-top">Preguntas frecuentes</h3>
	<div class="faq" id="nosotros">
		<div class="faq-text">
			<h3>¿Hacen envíos?</h3>
			<p>¡Claro, la magia es que son riquísimas y te llegan a la puerta de tu casa!<br>Hacemos envíos a CABA, zona norte y gran parte del conurbano</p>
		</div>
		<div class="faq-text">
			<h3>¿Las viandas son frescas?</h3>
			<p>¡Si, todas nuestras viandas se elaboran a pedido y llegan a tu casa frescas, listas para freezar!</p>
		</div>
		<div class="faq-text">
			<h3>¿Ayudan a bajar de peso?</h3>
			<p>Nuestro <a href="{{ URL::asset('menu/sin-harinas') }}">Menú Sin Harinas</a> y <a href="menu/economy">ECONOMY</a> está pensado para quienes bajar de peso rápido comiendo sano</p>
		</div>
	</div>
</div>
	<div>
		<h3 class="border-top">Última noticia</h3>
		<div class="faq">
			<div class="news">
				<h3>LOREM IPSUM</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
			</div>
		</div>
	</div>
</div>
@endsection
