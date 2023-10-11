<!--CONEXION-->
<?php

$con=mysqli_connect("localhost", "root", "", "shedulearn") or die ("Error de conexion");


?>
<html>
<head>
	<meta charset="utf-8">
	<title>Equipo de trabajo</title>
	<link rel="shortcut icon" type="image/x-icon" href="\imagenes\logo.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="equipooriginal.css?1.2">

<link rel="stylesheet" type="text/css" href="menu.css">

<link rel="stylesheet" type="text/css" href="pie.css">

<link rel="stylesheet" type="text/css" href="rgb.css">

<link rel="stylesheet" type="text/css" href="botoni.css">

<link rel="stylesheet" type="text/css" href="sidebar2.css">

<body class="equipo">
	<header>
	<a href="pagina.html"><img src="imagenes\logo.png"></a>
	<a href="pagina.html" class="logo">Shedulearn</a>
	<ul>
		<li><a href="pagina.php">Inicio</a></li>
		<li><a href="acerca de original.php">Acerca</a></li>
		<li><a href="equipo de trabajo.php" class="activo">Equipo</a></li>
		<li><a href="contactanos.php">Contactenos</a></li>
		<li><a href="cursos.php">Cursos</a></li>
		<li><a href="Jugar.html">Jugar</a></li>
	</ul>
</header>
<!--CODIGO TARJETAS -->
<section>
	<div class="container">
		<div class="carta">
			<div class="box">
			<div class="content">
				<div class="imgbox"><img src="imagenes\duvier.jpg"></div>
				<div class="contentbox">
					<h3>Duvier Castillo<br><span>Desarrollador de Software</span></h3><p>cdortiz@ucundinamarca.edu.co</p>

				</div>
			</div>
		</div>
			<ul class="sci">
			<li style="--i:1">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</li>
			<li style="--i:2">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</li>
			<li style="--i:3">
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</li>
		</ul>
		</div>
		<div class="carta">
			<div class="box">
			<div class="content">
				<div class="imgbox"><img src="imagenes/duvan.jpeg"></div>
				<div class="contentbox">
					<h3>Duvan Alquichides<br><span>Desarrollador de Software</span></h3><p>dalquichides@ucundinamarca.edu.co</p>

				</div>
			</div>
		</div>
			<ul class="sci">
			<li style="--i:1">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</li>
			<li style="--i:2">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</li>
			<li style="--i:3">
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</li>
		</ul>
		</div>
		<div class="carta">
			<div class="box">
			<div class="content">
				<div class="imgbox"><img src="imagenes\felipe.jpg"></div>
				<div class="contentbox">
					<h3>Felipe Olarte<br><span>Desarrollador de Software</span><br></h3><p>folarte@ucundinamarca.edu.co</p>

				</div>
			</div>
		</div>
			<ul class="sci">
			<li style="--i:1">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</li>
			<li style="--i:2">
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</li>
			<li style="--i:3">
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</li>
		</ul>
		</div>	
	</div>
</section>

<footer>

	<!-- INICIO MAPA-->
<div class="mapsbox">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.084964769471!2d-74.22562925013757!3d4.57876204396257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f756362c8f147%3A0x30535dfcb1466835!2sUniversidad%20de%20Cundinamarca%20Extensi%C3%B3n%20Soacha!5e0!3m2!1ses!2sco!4v1637436946750!5m2!1ses!2sco" allowfullscreen="" loading="lazy"></iframe>
</div>
<!--FINAL MAPA -->

	<div class="contenido-footer">
	<img src="imagenes\logo.png">
	<img src="imagenes\+10.png">

		<h3>SHEDULEARN</h3>
		<p>shedulearn © 2021-2023</p>
		<ul class="social">
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</li>
		</ul>
	</div>
	<div class="boton-footer">
		<p>Copyright &copy;2021 proyecto integrador para la <span>Universidad De Cundinamarca</span></p>
	</div>
</footer>
<!-- INICIO RGB SCROLL-->
<div id="barraprogreso"></div>
<div id= "scroll"></div>

<script type="text/javascript">
	let progress = document.getElementById('barraprogreso');
	let totalHeight = document.body.scrollHeight - window.innerHeight;
	window.onscroll = function(){
		let progressHeight = (window.pageYOffset / totalHeight ) * 100;
		progress.style.height = progressHeight + "%";
	} 
</script>
<!--FIN RGB SCROLL-->

<!-- INICIO SIDEBAR-->

			<div class="main-menu">
	<ul>
		<li class="menu-item"><i class="fa fa-home"></i>Inicio</li>
		<li class="menu-item"><i class="fa fa-user"></i>Perfil</li>
		<li class="menu-item"><i class="fa fa-graduation-cap"></i>Cursos</li>
		<li class="menu-item"><i class="fa fa-info-circle"></i>Ayuda</li>
		<li class="menu-item"><i class="fa fa-sign-out"></i><a href="pagina.html">Cerrar Sesion</a></li>
	</ul>
</div>

<!-- FIN SIDEBAR-->
</body>