<?php
	SESSION_START();
	$_SESSION['attempt'] = "0";
?>

<style>
	.profile {
		background: #00bcd4; 
	}	
</style>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cuidado a tu alcance</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section>
		<header>
			<div class="wrapper">
				<a href="index.php"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="asistentes.php">Asistentes</a></li>
						<li><a href="acerca.php">Acerca</a></li>
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
	<section class="listings profile">
		<div class="wrapper ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="text-center">Bienvenido a la edición de tu perfil</h3>
						<div class="row">
							<div class="col-xs-5">
								<img class="img-circle img-responsive" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
							</div>
							<div class="col-xs-7">
								<p>hola mundo!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- End of modify here-->
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Terms</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">Villas</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
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
			© 2016 Cuidado a tu alcance | Diseñado por W3layouts
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>