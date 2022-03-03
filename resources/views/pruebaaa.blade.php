<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('tp')</title>
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
						<li><a href="{{route('unidad2')}}">UNIDAD 2</a></li>
						<li><a href="#">UNIDAD 3</a></li>
					</ul>
				</nav>
				<!-- Main -->
					<div id="main">
						<div class="inner">
						<header>
								<h1> U1.Fundamentos de la arquitectura<br />
								CLIENTE/SERVIDOR.</h1>
								<p></p>
                                <h2>Introduccion a la arquitectura cliente/servidor.</h2>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/foto2.jpeg" alt="" />
									</span>
									<a href="{{route('generic')}}">
										<h2>SISTEMAS DE INFORMACIÓN.</h2>
										<div class="content">
											<p>Existen varias formas especializadas o aplicadas de SI, dependiendo del campo puntual y de las funciones específicas que se esperan de cada uno, a continuación enlistaremos algunas.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/foto01.jpeg" alt="" />
									</span>
									<a href="{{route('generic1')}}">
										<h2>EVOLUCIÓN DE LOS SISTEMAS DE INFORMACIÓN.</h2>
										<div class="content">
											<p>Se hablará desde los años 1950 hasta la actualidad donde se dará un pequeño resumen de lo mas sobresaliente de estas fechas.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/foto03.jpeg" alt="" />
									</span>
									<a href="{{route('generic2')}}">
										<h2>CONCEPTOS DE CLIENTE/SERVIDOR.</h2>
										<div class="content">
											<p>Se hablara sobre el procesamiento cooperativo de la información por medio de un conjunto de procesadores, en el cual múltiples clientes, distribuidos geográficamente, solicitan requerimientos a uno o más servidores centrales.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/foto04.jpeg" alt="" />
									</span>
									<a href="{{route('generic3')}}">
										<h2>SISTEMAS DE COMPUTADORAS CENTRALES Y DEDICADAS.</h2>
										<div class="content">
											<p>Se hablara de los sistemas centrales y dedicados, uno de ellos s una computadora utilizada principalmente por grandes organizaciones para aplicaciones críticas, procesamiento de datos masivos. Y el segundo es un equipo informático físico que destina todos sus recursos a proporcionar información y atender las peticiones de otro ordenador.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/foto5.jpeg" alt="" />
									</span>
									<a href="{{route('generic4')}}">
										<h2>SISTEMAS DE CONEXIÓN LIBRE Y A TRAVÉZ DE REDES.</h2>
										<div class="content">
											<p>Tratara de los sistemas de conexión libre donde se solicita de una computadora de servicio y sobre el computo a través de redes donde la informacion que reside en una o varias computadoras, los usuarios hacen el uso de esta misma.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/foto6.jpeg" alt="" />
									</span>
									<a href="{{route('generic5')}}">
										<h2>SISTEMAS CON ARQUITECTURA CLIENTE/SERVIDOR.</h2>
										<div class="content">
											<p>Los sistemas hacen referencia a clientes que ejecutan distintos tipos de peticiones a otros programas.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/foto07.jpeg" alt="" />
									</span>
									<a href="{{route('generic6')}}">
										<h2>PROTOCOLOS DE COMUNICACIÓN EN RED.</h2>
										<div class="content">
											<p>Los protocolos son estándares y políticas que definen el intercambio de paquetes de información, esto con el fin de lograr la comunicación entre servidores.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/foto8.jpeg" alt="" />
									</span>
									<a href="{{route('generic7')}}">
										<h2>CLASIFICACIÓN DE LOS SISTEMAS DE INFORMACIÓN DE ACUERDO A SU ARQUITECTURA.</h2>
										<div class="content">
											<p>La estructura de la arquitectura varía en función de las necesidades de las empresas y del momento histórico en el que se introdujeron.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/foto09.jpeg" alt="" />
									</span>
									<a href="{{route('generic8')}}">
										<h2>PROCESO DE DIAGRAMACIÓN DE COMPONENTES DE LA ARQUITECTURA CLIENTE/SERVIDOR.</h2>
										<div class="content">
											<p>Aqui explicaremos cual es el proceso de diagramacion de la arquitectura cliente/servidor.</p>
										</div>
									</a>
								</article>
							</section>
							<header>
								<h1>@yield('tpp')</h1>
								<p></p>
                                <h2>@yield('tppp')</h2>
							</header>
							<section class="tiles">
							</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f1')" alt="" />
									</span>
									<a href="@yield('r1')">
										<h2>@yield('t1')</h2>
										<div class="content">
											<p>@yield('c1')</p>
										</div>
									</a>
							</article>
							<article class="style1">
									<span class="image">
										<img src="@yield('f2')" alt="" />
									</span>
									<a href="@yield('r2')">
										<h2>@yield('t2')</h2>
										<div class="content">
											<p>@yield('c2')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f3')" alt="" />
									</span>
									<a href="@yield('r3')">
										<h2>@yield('t3')</h2>
										<div class="content">
											<p>@yield('c3')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f4')" alt="" />
									</span>
									<a href="@yield('r4')">
										<h2>@yield('t4')</h2>
										<div class="content">
											<p>@yield('c4')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f5')" alt="" />
									</span>
									<a href="@yield('r5')">
										<h2>@yield('t5')</h2>
										<div class="content">
											<p>@yield('c5')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f6')" alt="" />
									</span>
									<a href="@yield('r6')">
										<h2>@yield('t6')</h2>
										<div class="content">
											<p>@yield('c6')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f7')" alt="" />
									</span>
									<a href="@yield('r7')">
										<h2>@yield('t7')</h2>
										<div class="content">
											<p>@yield('c7')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f8')" alt="" />
									</span>
									<a href="@yield('r8')">
										<h2>@yield('t8')</h2>
										<div class="content">
											<p>@yield('c8')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f9')" alt="" />
									</span>
									<a href="@yield('r9')">
										<h2>@yield('t9')</h2>
										<div class="content">
											<p>@yield('c9')</p>
										</div>
									</a>
								</article>
							</section>
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