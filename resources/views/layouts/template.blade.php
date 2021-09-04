<!DOCTYPE html>
<html>
<head>
	<title>Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
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
</head>
<body style="font-family: 'Lato', sans-serif;'">

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Nosotros</a>
  <a href="#">Servicios</a>
  <a href="#">Ubicación</a>
  <a href="#">Contacto</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>
</div>

<div>
	<h1 style="color: red; text-align: center;">Viandas Pop!</h1>
</div>

<script type="text/javascript" src="js/index.js"></script>
   
</body>
</html> 