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
		
		.footer {
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
						<li><a href="acerca.php">Acerca</a></li>
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

	<section class="listings">
		<div class="wrapper">
		<img src="http://diftampico.tamaulipas.gob.mx/images/banner-fondo.jpg" alt="esto se debería ver"></img>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="">
					<p>"Cuidado a tu alcance" consiste en la creación de una bolsa de trabajo online que vincule auxiliares de enfermería con posibles clientes para su contratación.</p>
					<ul>
						<li><a href="http://www.facebook.com/catualcance/" class="footer" target="_blank"><img src="img/facebook.png"></a></li>
                        <li><a href="http://fondeadora.com/projects/cuidado-a-tu-alcance" class="footer"><img src="img/fondeadora.png"/></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright © 2015 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">Pixelhint.com</a>. All Rights Reserved.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>