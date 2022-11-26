<!DOCTYPE HTML>
<?php
include 'fecha.php';
?>
<html>
	<head>
		<title>Portafolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<p><i>"Mientras distraigas tu mente de sus sueños, &eacute;sta no lo reconocer&aacute; como lo que son; siempre te dejar&aacute;s enga&ntilde;r por la aparencia de las cosas, porque no habr&aacute;s captado su naturaleza, si so&ntilde;ar un poco es peligroso, la cura para ello no es so&ntilde;ar menos, sino so&ntilde;ar m&aacute;s, so&ntilde;ar todo el tiempo"</i></p>
						<!--<p>Ningun &aacute;rbol puede llegar al cielo a menos que sus raices lleguen al infierno.</p>-->
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="#intro" class="logo">Home</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="Fases/generic.html">fase 1</a></li>
							<li><a href="elements.html">Fase 2</a></li>
							<li><a href="generic.html">Fase 3</a></li>
							<li><a href="elements.html">Fase 4</a></li>
							<li><a href="elements.html">Fase 5</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date"><?php
										echo obtenerFechaEnLetra();
										?></span>
									<h2>And this is a</h2>
									<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
									facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
									amet nullam sed etiam veroeros.</p>
								</header>
								<a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
								<ul class="actions special">
									<li><a href="#" class="button large">Full Story</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">
								<article>
									<header>
										<span class="date">April 24, 2017</span>
										<h2><a href="#">Sed magna<br />
										ipsum faucibus</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 22, 2017</span>
										<h2><a href="#">Primis eget<br />
										imperdiet lorem</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 18, 2017</span>
										<h2><a href="#">Ante mattis<br />
										interdum dolor</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 14, 2017</span>
										<h2><a href="#">Tempus sed<br />
										nulla imperdiet</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 11, 2017</span>
										<h2><a href="#">Odio magna<br />
										sed consectetur</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 7, 2017</span>
										<h2><a href="#">Augue lorem<br />
										primis vestibulum</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
							</section>
					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>