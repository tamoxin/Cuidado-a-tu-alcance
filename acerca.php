<?php
	SESSION_START();
	$_SESSION['attempt'] = "0";
?>


<!DOCTYPE html>
<html lang="en">
<head>

	<style>
		.title {
			width: 30%;
            height: auto;
			background-size: 100% auto !important;
		}
		
		.black {
			color: #000000;
		}
	</style>

	<title>Cuidado a tu alcance</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section>
		<header>
			<div class="wrapper">
				<a href="index.php"><img src="img/logo.png" class="title" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<?php if(isset($_SESSION['user'])) : ?>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="profile.php">Perfil</a></li>
						<?php endif; ?>
						<li><a href="auxiliares.php">Auxiliares</a></li>
						<li><a href="contacto.php">Contacto</a></li>
					</ul>
					<?php if(isset($_SESSION['user'])) : ?>
							<a href="/enfermeras/logout.php" class="login_btn">Cerrar sesión</a>
					<?php else : ?>
							<a href="/enfermeras/login.php" class="login_btn">Iniciar sesión</a>	
					<?php endif; ?>
				</nav>
			</div>
		</header><!--  end header section  -->
	</section><!--  end hero section  -->

	<!--Modify here-->
	<section class="listings">
		<div class="wrapper">
			<h2>¿De qué trata el proyecto?</h2>
			<h4 class="black">Es un proyecto creado por 9 alumnos del Tecnológico de Monterrey Campus Tampico, que encontraron un área de oportunidad para el emprendimiento social. </h4>
			<br>
			<h4 class="black">Actualmente en Tampico, Tamaulipas, existe una gran demanda de auxiliares de enfermeria, pero por la falta de algún centro o agencia de estos, la gente que busca este servicio no puede contratarlos. Debido a esta problemática se crea "Cuidado a tu alcance".</h4>
			<br>
			<h4 class="black">El proyecto consiste en la elaboración de una página web que busca vincular a los egresados de los talleres impartidos en la zona, con situaciones económicas vulnerables, con posibles clientes que requieran algún servicio relacionado con enfermería.</h4>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="auxiliares.php">Auxiliares</a></li>
						<li><a href="acerca.php">Acerca</a></li>
						<li><a href="contacto.php">Contacto</a></li>
					</ul>
				</li>

				<li class="about">
					<p>"Cuidado a tu alcance" consiste en la creación de una bolsa de trabajo online que vincule auxiliares de enfermería con posibles clientes para su contratación.</p>
					<ul>
						<li><a href="http://www.facebook.com/catualcance/" class="facebook" target="_blank"></a></li>
                        <li><a href="http://fondeadora.com/projects/cuidado-a-tu-alcance" >Fondeadora</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright © 2016 <a href="index.php" target="_blank" class="ph_link" title="Cuidado a tu alcance">Cuidado a tu alcance</a>. Todos los derechos reservados.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>