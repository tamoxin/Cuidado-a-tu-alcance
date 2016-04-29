<?php
	SESSION_START();
	$_SESSION['attempt'] = "0";
	
	$name = "";
	$desc = "";
	$exp = "";
	$phone = "";
	$entrada = "";
	$salida = "";
	$sex = "";
	$age = "";
	$img = "";
	$sel_user = "SELECT description,age,entrada,salida,experience,sex,age,telephone,name FROM users";
	$nurse = "";
	
	$con= mysqli_connect("localhost", "root", "", "enfermeras") or die("Unable to connect");
	
	$run_user = mysqli_query($con, $sel_user);
    
    $check_user = mysqli_num_rows($run_user); 
	
	if($check_user > 0) {
        //si hubo respuesta a la consulta
		while ($arreglo = mysqli_fetch_array($run_user, MYSQLI_ASSOC)) {
        		$tabla['name'][] = $arreglo['name'];
        		$tabla['exp'][] = $arreglo['experience'];
        		$tabla['desc'][] = $arreglo['description'];
				$tabla['entrada'][] = $arreglo['entrada'];
				$tabla['salida'][] = $arreglo['salida'];
				$tabla['sex'][] = $arreglo['sex'];
				$tabla['phone'][] = $arreglo['telephone'];
				$tabla['age'][] = $arreglo['age'];
		}
		
		for ($x=0; $x <= count($tabla['name'])-1; $x++){
			$name = $tabla['name'][$x];
			$desc = $tabla['desc'][$x];
			$exp = $tabla['exp'][$x];
			$phone = $tabla['phone'][$x];
			$entrada = $tabla['entrada'][$x];
			$salida = $tabla['salida'][$x];
			$age = $tabla['age'][$x];
			$sex = $tabla['sex'][$x];
			if($sex == 'm') {
				$img = "'img/enfermero.png'";
			} else if($sex = 'f') { 
				$img = "'img/enfermera.png'";
			}
			
			$nurse.= 
						"<li>
							<div class='well'>
								<div class='row'>
									<div class='col-md-6'>
										<img src=".$img." class='img-responsive' alt='Avatar de enfermera' align='center'/>
									</div>
									<div class='col-md-6'>
										<h3 align='center'>
											<a href='viewprofile.php'>".$name."</a>
										</h3>
									</div>
								</div>
								<br>
								<div class='row'><div class='col-md-12'><h5><b>Edad: </b>".$age."</h5></div></div>
								<div class='row'><div class='col-md-12'><h5><b>Horario: </b>".$entrada."-".$salida."</h5></div></div>
								<div class='row'><div class='col-md-12'><h5><b>Descripción: </b>".$desc."</h5></div></div>
								<div class='row'><div class='col-md-12'><h5><b>Experiencia: </b>".$exp."</h5></div></div>
								<div class='row'><div class='col-md-12'><h5><b>Teléfono: </b>".$phone."</h5></div></div>
							</div>
						</li>";
		}
		
		mysqli_free_result($run_user);
        mysqli_close($con); 
    }
    else {
        $_SESSION['attempt'] = $_SESSION['attempt'] + 1;
        mysql_close();
        header('Location: login.php');
    }   
	
	
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
	</style>

	<title>Cuidado a tu alcance</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

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


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<!--Parte dinámica-->
				<?php echo $nurse;?>
				<!--Fin de la parte dinámica-->
			</ul>
			<div class="more_listing">
				<a href="#" class="more_listing_btn">Volver arriba</a>
			</div>
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
			Copyright © 2016 <a href="index.php" target="_blank" class="ph_link" title="Yo te vendo">Yo te vendo</a>. Todos los derechos reservados.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>