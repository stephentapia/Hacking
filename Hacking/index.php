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
						<p><i>"Mientras distraigas tu mente de sus sueños, &eacute;sta no lo reconocer&aacute; como lo que son; siempre te dejar&aacute;s enga&ntilde;ar por la aparencia de las cosas, porque no habr&aacute;s captado su naturaleza, si so&ntilde;ar un poco es peligroso, la cura para ello no es so&ntilde;ar menos, sino so&ntilde;ar m&aacute;s, so&ntilde;ar todo el tiempo"</i></p>
						<!--<p>Ningun &aacute;rbol puede llegar al cielo a menos que sus raices lleguen al infierno.</p>-->
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
							</ul>
							<a href="https://www.santotomas.cl/"><img id="logo_santotomas" src="images/santotomas.png" alt="santotomas"></a>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="#intro" class="logo">Home</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="Fases/fase1.html">Fase 1</a></li>
							<li><a href="Fases/fase2.html">Fase 2</a></li>
							<li><a href="Fases/fase3.html">Fase 3</a></li>
							<li><a href="Fases/fase4.html">Fase 4</a></li>
							<li><a href="Fases/fase5.html">Fase 5</a></li>
								
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
									<h2>LAS FASES DEL ETHICAL HACKING</h2>
									<p>Cuando hablamos de las fases nos referimos a la acción de efectuar pruebas de intrusión controladas sobre un sistema informático, es decir, actuamos del punto de vista de un cracker, para tratar de encontrar vulnerabilidades, pero siempre en un ambiente supervisado, en el que no se ponga en riesgo la operatividad de los servicios informáticos de la organización.
									</p>
								</header>
								<a href="Fases/fase1.html" class="image main"><img src="images/todas_las_fases.png" alt="" /></a>
								<ul class="actions special">
									<li><a href="Fases/fase1.html" class="button large">Mas Información</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">
								<article>
									<header>
										<span class="date">Noviembre 29, 2022</span>
										<h2><a href="#">Javier Ignacio Gómez Ramírez<br /></a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/avatar_javier.png" alt="" /></a>
									<p style="text-align:center;">Estudiante de Ingeneria en ejecución en informática<br/>
								        j.gomezr2@alumnos.santotomas.cl
									</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">Noviembre 29, 2022</span>
										<h2><a href="#">Wladimir Esteban Tapia Collao<br /></a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/avatar_wladimir.png" alt="" /></a>
									<p style="text-align:center;">Estudiante de Ingeneria en ejecución en informática<br/>wtapia@alumnos.santotomas.cl</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>

								<article>
									<header>
										<span class="date">Noviembre 29, 2022</span>
										<h2><a href="#">Docente Marco Vega Rojas<br /></a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/avatar_marco.png" alt="" /></a>
									<p style="text-align:center;">Docente de Ingeneria en ejecución en informática<br/>mvega27@santotomas.cl</p>
									<ul class="actions special">
										<li><a href="#" class="button">Full Story</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">Noviembre 29, 2022</span>
										<h2><a href="https://www.santotomas.cl/">Santo Tomás<br /></a></h2>
									</header>
									<a href="https://www.santotomas.cl/" class="image fit"><img src="images/avatar_santotomas.jpg" alt="" /></a>
									<p style="text-align:center;">Instituto Profecional Santo Tomás</p>
									<ul class="actions special">
										<li><a href="https://www.santotomas.cl/" class="button">Full Story</a></li>
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