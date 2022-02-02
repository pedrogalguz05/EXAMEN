<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>TEMA 8</title>
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
						<h2>Menu</h2>
						<ul>
						<li><a href="{{route('inicio')}}">INICIO</a></li>
						<li><a href="{{route('generic')}}">TEMA 1</a></li>
						<li><a href="{{route('generic1')}}">TEMA 2</a></li>
						<li><a href="{{route('generic2')}}">TEMA 3</a></li>
						<li><a href="{{route('generic3')}}">TEMA 4</a></li>
						<li><a href="{{route('generic4')}}">TEMA 5</a></li>
						<li><a href="{{route('generic5')}}">TEMA 6</a></li>
						<li><a href="{{route('generic6')}}">TEMA 7</a></li>
						<li><a href="{{route('generic7')}}">TEMA 8</a></li>
						<li><a href="{{route('generic8')}}">TEMA 9</a></li>
					</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>CLASIFICACIÓN DE LOS SISTEMAS DE INFORMACIÓN DE ACUERDO A SUS ARQUITECTURAS.</h1>
							<span class="image main"><img src="images/foto08.jpeg" alt="" /></span>
                            <h2>CLASIFICAR LOS SISTEMAS DE INFORMACIÓN DE ACUERDO A SU ARQUITECTURA</h2>
                            <p>La arquitectura de un sistema trata de describir, tanto desde un punto de vista físico como lógico, la forma en la que trabajan los diferentes componentes del mismo.<br>
                                Niveles lógicos<br>
                                - Interfaz de usuario: nivel de presentación donde reside la lógica de presentación e interacción con el usuario.<br>
                                - La lógica de negocio: donde residen las reglas de negocio y validación. Es el núcleo funcional de la aplicación.<br>
                                - El acceso a los datos: nivel encargado de la persistencia e integridad de la información en el sistema.<br><br>
                                Sistemas monolíticos/centralizados<br>
                                Su implementación física consiste en disponer de un gran ordenador central que sirve a cientos o miles de usuarios conectados al mismo a través de una pantalla “tonta” que se utiliza para entrar o actualizar datos y acceder a información en el mainframe. Tanto la interfaz de usuario como las reglas de negocio y los datos residen en la misma máquina. Se produce, en consecuencia, un acoplamiento de niveles.<br><br>
                                Arquitectura cliente/servidor<br>
                                A partir de mediados de los ochenta se fue extendiendo el uso de terminales “inteligentes” en forma de PC de sobremesa o portátiles que, además de teclado y pantalla, incorporan elevadas capacidades de proceso y almacenaje, de modo que los usuarios pueden procesar información localmente, de forma descentralizada y autónoma respecto al mainframe u ordenador central.<br><br>
                                Arquitectura distribuida<br>
                                Se establece una división entre los distintos niveles lógicos, necesaria para soportar las nuevas arquitecturas Internet. Implementación de dicha separación se consigue con la incorporación de un nuevo tipo de servidor: el servidor de aplicaciones. </p>
                            
							</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>CONTACTO:</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
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