@extends('layouts.template')

@section('title')
	<div style="text-align: center; margin-bottom: 15px;">
		<h5 style="color: gray;">¡Bienvenidos a</h5>
		<h1 style="color: red;">Viandas Pop!</h1>
	</div>
@endsection

@section('subtitle')
	<div style="text-align: center; color: white;">
		<h3 style="margin-bottom: 20px;">¡Viandas saludables, ricas, frescas y listas para freezar!</h3>
	</div>
@endsection

@section('main')
<div class="flex-item">
	<img class="post-image" src="{{ URL::asset('img/icon.webp') }}">
	<p class="post-header"> <a href="#">Sin Harinas</a></p>
	<p class="post-text">La opción justa para bajar de peso en forma rápida<br>Son 14 platos seleccionados profesionalmente a base de carne, pollo y pescado con guarnición de verduras.<br>Es un menu fijo, pero podes hacer hasta dos cambios si algo no te gusta. Las viandas vienen en 150 cal, y 300 cal. Es el mismo menú y lo que cambia es la porción.</p>
</div>
<div class="flex-item">
	<img class="post-image" src="{{ URL::asset('img/icon.webp') }}">
	<p class="post-header"> <a href="#">Gourmet</a></p>
	<p class="post-text">Los platos los elegís vos, para que comas equilibradamente, y te damos la opción de elegir 7 platos a base de carne, pollo o pescado (hasta 3 de cada uno, pero en un total de 7) y 7 a base de verduras, legumbres y hortalizas, tartas, o pastas.<br>Las viandas vienen en tres tamaños, 150 cal, 300 cal.<br>Las viandas las recibís frescas recién elaboradas para frezar.</p>
</div>
<div class="flex-item">
	<img class="post-image" src="{{ URL::asset('img/icon.webp') }}">
	<p class="post-header"> <a href="#">Veggie</a></p>
	<p class="post-text">Menú a elección de 14 viandas, a base de verduras y hortalizas, pastas, granos y tartas. Vienen en 150, 300 cal.<br>Los envíos se realizan los días miércoles y viernes.<br>¡Hacenos tu pedido con la mayor de antelación!</p>
	<div class="author">
		<div class="author-content">
			<button class="author-name"><a style="font-size: small" href="#">Ver menú</a></button>
		</div>
	</div>
</div>
@endsection