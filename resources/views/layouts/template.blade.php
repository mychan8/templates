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
		  transition: 0.2s;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style=";">

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#nosotros" onclick="closeNav()">Nosotros</a>
  <a href="#menus" onclick="closeNav()">Menús</a>
  <a href="{{ URL::asset('menu') }}" onclick="closeNav()">Precios</a>
  <a href="#contacto" onclick="closeNav()">Contacto</a>
  <br>
  <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
  <a href="https://www.instagram.com/viandaspop/"><i class="fa fa-instagram"></i> Instagram</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>
</div>

@yield('title')
@yield('subtitle')

<div class="icon-bar">
  <a class="active" href="#"><img class="icon" src="{{ URL::asset('img/icon.webp') }}"></i></a>
  <a class="active" href="https://www.instagram.com/viandaspop/"><img class="icon" src="{{ URL::asset('img/instagram.png') }}">
</div>

<main id="menus">
	@yield('main')
</main>

<script type="text/javascript" src="js/index.js"></script>

<footer id="contacto">
	<!--- LOGO REDES SOCIALES --->
	<div class="flex">
		<div class="column">
			<div>
				<h2>Viandas<span style="color: red">Pop</span>!</h2>
			</div>

			<div>
				<a href="#"><i class="fa fa-facebook"></i></a>   ||   <a href="https://www.instagram.com/viandaspop/"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
		
		<!--- ABOUT CONTACTO --->

		<div class="column">
			<p class="company-about">
			<h3>Nosotros</h3>
			Realizamos viandas a domicilio euismod convallis velit, eu auctor lacus vehicula sit amet.</p>

			<div>
				<p><i class="fa fa-envelope"></i> <a href="mailto:pedidosviandaspop@gmail.com">pedidosviandaspop</a></p>
				<p><i class="fa fa-map-marker"></i> <span>Av. Rivadavia</span> Buenos Aires, Argentina</p>
			</div>
		</div>

	<!--- UBICACION MAPA --->

		<div class="column">
		    <div class="map">
				<iframe width="300" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=buenos%20aires&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
		</div>

	</div>

</footer>
</body>
</html> 