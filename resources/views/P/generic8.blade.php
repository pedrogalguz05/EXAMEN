<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>TEMA 9</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="{{route('inicio')}}" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">CHICAS SUPERPODEROSAS</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">MENU</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
				<nav id="menu">
					<h2>MENU</h2>
					<ul>
						<li><a href="{{route('inicio')}}">INICIO</a></li>
						<li><a href="{{route('prueba')}}">UNIDAD 1</a></li>
						<li><a href="#">UNIDAD 2</a></li>
						<li><a href="#">UNIDAD 3</a></li>
					</ul>
				</nav>
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>PROCESO DE DIAGRAMACIÓN DE COMPONENTES DE LA ARQUITECTURA CLIENTE/SERVIDOR.</h1>
							<span class="image main"><img src="images/foto9.jpeg" alt="" /></span>
							<p>Patrones de Diseño (GRASP) Los patrones de diseño son la base para la búsqueda de soluciones a problemas comunes en el desarrollo de software y para lograr una mayor calidad en el diseño.</p>
							<p>Durante el desarrollo del sistema se utilizaron patrones básicos de asignación de responsabilidades como Patrones Generales de Software para Asignar Responsabilidades (General Responsability Asignment Software Patterns) GRASP.</p>
							<p>El sistema está diseñado bajo una arquitectura cliente-servidor haciendo uso de patrón arquitectónico Modelo-Vista-Controlador.</p>
							<p>se clasifican en:<br>
								Arquitecturas monolíticas (1 capa):<br>
								- En esta configuración se compone de un microcomputador y un terminal directamente conectados.<br><br>
								Arquitecturas de dos capas:<br>
								- El cliente se comunica directamente con un servidor de bases de datos.<br><br>
								Arquitecturas de tres capas:<br>
								Una arquitectura multicapa se define por tanto por las siguientes tres capas de componentes:<br>
								- Un componente front-end que es el responsable de proporcionar la lógica de presentación.<br>
								- Un componente back-end que proporciona acceso a servicios dedicados, tales como un servidor de bases de datos.<br>
								- Un componente que hace las funciones de capa intermediaria (middl tier) que permite a los usuarios compartir y controlar la lógica de negocio mediante su aislamiento de la aplicación real.
								</p>
							</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>CONTACTO:</h2>
								<ul class="icons">
									<li><a href="https://www.facebook.com/profile.php?id=100009863443321" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/danielita__cv/?hl=es-la" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/pedrogalguz05/EXAMEN.git" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="https://wa.me/qr/73NQNI527OOZJ1" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="naydelin_1320114060@uptecamac.edu.mx" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>