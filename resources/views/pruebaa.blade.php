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
							</section>
								<header>
								<h1>@yield('tpp1')</h1>
								<p></p>
                                <h2>@yield('tppp1')</h2>
								</header>
								<section class="tiles">
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
								</section>
								<header>
								<h1>@yield('tpp2')</h1>
								<p></p>
                                <h2>@yield('tppp2')</h2>
								</header>
								<section class="tiles">
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
								<article class="style1">
									<span class="image">
										<img src="@yield('f10')" alt="" />
									</span>
									<a href="@yield('r10')">
										<h2>@yield('t10')</h2>
										<div class="content">
											<p>@yield('c10')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f11')" alt="" />
									</span>
									<a href="@yield('r11')">
										<h2>@yield('t11')</h2>
										<div class="content">
											<p>@yield('c11')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f12')" alt="" />
									</span>
									<a href="@yield('r12')">
										<h2>@yield('t12')</h2>
										<div class="content">
											<p>@yield('c12')</p>
										</div>
									</a>
								</article>
								</section>
								<header>
								<h1>@yield('tpp3')</h1>
								<p></p>
                                <h2>@yield('tppp3')</h2>
								</header>
								<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="@yield('f13')" alt="" />
									</span>
									<a href="@yield('r13')">
										<h2>@yield('t13')</h2>
										<div class="content">
											<p>@yield('c13')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f14')" alt="" />
									</span>
									<a href="@yield('r14')">
										<h2>@yield('t14')</h2>
										<div class="content">
											<p>@yield('c14')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f15')" alt="" />
									</span>
									<a href="@yield('r15')">
										<h2>@yield('t15')</h2>
										<div class="content">
											<p>@yield('c15')</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="@yield('f16')" alt="" />
									</span>
									<a href="@yield('r16')">
										<h2>@yield('t16')</h2>
										<div class="content">
											<p>@yield('c16')</p>
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