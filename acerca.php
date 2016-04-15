<?php
	SESSION_START();
	$_SESSION['attempt'] = "0";
?>


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
	<section class="listings">
		<div class="wrapper">
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Mansions</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
						<li><a href="#">...</a></li>
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
			Copyright © 2015 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">Pixelhint.com</a>. All Rights Reserved.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>