<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	SESSION_START();
	if(isset($_SESSION['user'])){
		header('Location: index.php');
	}
	if(!isset($_SESSION['attempt'])){
		$_SESSION['attempt'] = 0;
	}
?>

<style>
	.badlogin {
		color: red;
	}	
</style>

<!DOCTYPE HTML>
<html>
<head>
<title>Ingresa a tu perfil</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Creative Forms Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="js/jquery.min.js"></script>
<script>$(document).ready(function(c) {
			$('.contact-close').on('click', function(c){
				$('.contact-text').fadeOut('slow', function(c){
					$('.contact-text').remove();
				});
				});
			});
</script>
<script>$(document).ready(function(c) {
		$('.small-contact-close').on('click', function(c){
			$('.small-contact-text').fadeOut('slow', function(c){
				$('.small-contact-text').remove();
			});
			});	  
		});
   </script>
</head>
<body>
<!--header strat here-->
<div class="element">
	 <h1>Ingresa a tu perfil</h1>
	<div class="element-block2">
		<div class="element-block2-left">
			<div class="signin">
			 <h3>Ingresa</h3>
			 <h4>Ingresa a tu cuenta</h4>
			 <form action="connect_mysqli.php" method="POST">
				<div class="mess">
				  <input type="text" class="user"  placeholder="Usuario" required="" name="user">
				  <span class="mess1"> </span>
				</div>
				<div class="mess">
				  <input type="password" class="lock"  placeholder="Contraseña" required="" name="pass">
				  <span class="mess2"> </span>
				</div>
				<input type="submit"  name="login" value="Login">
			  	</form>
				<?php if($_SESSION['attempt'] > 0) : ?>
					<div class="lost, badlogin">
						El nombre se usuario o contraseña son incorrectos, por favor inténtelo nuevamente.
					</div>
				<?php endif; ?>
				<div class="lost">
				     <span class="checkbox1">
				       <label class="checkbox"><input type="checkbox" name="nologout" checked="false"><i> </i>No salir de la cuenta</label>
			         </span>
				      <div class="lost-password">
				      	<a href="#">¿Olvidaste tu contraseña?</a>
				      </div>
				    <div class="clear"> </div>
				</div>
            <p>
            <div class="clear"> </div>
            <a href="/enfermeras/">Regresar al sitio</a>
            </p>
			</div>
		</div>
        
        <!-- right block -->
		<div class="element-block2-right">
		   <div class="signup">
			   <h3>O bien, abre una cuenta</h3>
			   <h4>Es gratis y lo será siempre</h4>
			  <form action="register.php" method="POST">
			  	 <input class="email" type="text" placeholder="Correo Electrónico" required="" name="mail">
			  	  <input class="user" type="text" placeholder="Usuario" required="" name="user">
			  	  <input class="lock" type="password" placeholder="Contraseña" required="" name="pass">
			  	  <input class="lock" type="password" placeholder="Contraseña" required="">
                  <p>Al hacer clic en "Abrir una cuenta", aceptas las Condiciones y confirmas que leíste nuestra Política de datos, incluido el uso de cookies.</p>
                  <input type="submit" value="Abrir una cuenta">
			  </form>
			  <div class="clear"> </div>
              <p>
                <a href="/enfermeras/">Regresar al sitio</a>
              </p>
		   </div>
		</div>
	   <div class="clear"> </div>
	</div>
</div>
<!--header end here-->
<div class="copy-right">
			<p>© 2016 Cuidado a tu alcance | Diseñado por  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>

</body>
</html>