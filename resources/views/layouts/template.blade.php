<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-----
	<meta name="description" content="">
    <meta name="keywords"  content="">
    ----->
    <style type="text/css">
		.sidebar {
		  height: 100%; /* 100% Full-height */
		  width: 0; /* 0 width - change this with JavaScript */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Stay on top */
		  top: 0;
		  left: 0;
		  background-color: #111; /* Black*/
		  overflow-x: hidden; /* Disable horizontal scroll */
		  padding-top: 60px; /* Place content 60px from the top */
		  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
		}

		/* The sidebar links */
		.sidebar a {
		  padding: 8px 8px 8px 32px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #818181;
		  display: block;
		  transition: 0.3s;
		}

		/* When you mouse over the navigation links, change their color */
		.sidebar a:hover {
		  color: #f1f1f1;
		}

		/* Position and style the close button (top right corner) */
		.sidebar .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 36px;
		  margin-left: 50px;
		}

		/* The button used to open the sidebar */
		.openbtn {
		  font-size: 20px;
		  cursor: pointer;
		  background-color: #111;
		  color: white;
		  padding: 10px 15px;
		  border: none;
		}

		.openbtn:hover {
		  background-color: #444;
		}

		/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
		#main {
		  transition: margin-left .5s; /* If you want a transition effect */
		  padding: 20px;
		}

		/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
		@media screen and (max-height: 450px) {
		  .sidebar {padding-top: 15px;}
		  .sidebar a {font-size: 18px;}
		}
	</style>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
    <link rel="preload" href="{{ URL::asset('img/background.jpeg') }}">
</head>
<body style="background-color: black">

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#nosotros" onclick="closeNav()">Nosotros</a>
  <a href="#menus" onclick="closeNav()">Menús</a>
  <a href="{{ URL::asset('menu') }}" onclick="closeNav()">Precios</a>
  <a href="#contacto" onclick="closeNav()">Contacto</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>
</div>

@yield('title')
@yield('subtitle')
<main style="background-image: url({{ URL::asset('img/background.jpeg') }});" id="menus">
	<div style="margin: 15px; padding: 5px;">
		<div class="cards">
			@yield('main')
		</div>
	</div>
</main>
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
<script type="text/javascript" src="js/index.js"></script>

<footer>
    <div id='contacto' style="vertical-align: center; margin: 5px;">
		<h5 style="margin: 5px;">Ubicación</h5>
		<iframe width="250" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=buenos%20aires&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</div>
</footer>
</body>
</html> 