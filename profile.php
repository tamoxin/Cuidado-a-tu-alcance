<?php
	SESSION_START();
    
	if(isset($_SESSION['user'])){
		$id = $_SESSION['id'];
        
        $connect = mysqli_connect("localhost","root","","enfermeras");
        $query1 = mysqli_query($connect,"select * from users where user_id='$id'");
        if (mysqli_num_rows($query1) > 0) {
            while($array = mysqli_fetch_assoc($query1)){
                $name = $array["name"];
                $email = $array["email"];
                $age = $array["age"];
                $sex = $array["sex"];
                $entrada = $array["entrada"];
                $salida = $array["salida"];
                $phone = $array["telephone"];
                $exp = $array["experience"];
                $desc = $array["description"];
            }
       }
	}
	else{
        mysqli_close();
        header('Location: index.php');
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>


	<style>
		.profile {
			background: #00bcd4; 
		}	
	</style>
	
	<title>Cuidado a tu alcance</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="css/form-labels-on-top.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section>
		<header>
			<div class="wrapper">

				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="auxiliares.php">Auxiliares</a></li>
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
		<div class="main-content">

        <!-- You only need this form and the form-labels-on-top.css -->

        <form class="form-labels-on-top" method="post" action="update.php">

            <div class="form-title-row">
                <h1>Bienvenido a tu perfil</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Nombre completo</span>
                    
                        <?php
                            echo "<input type='text' name='name' value='".$name."'>";
                        ?>
                    
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Email</span>
                    
                    <?php
                        if(isset($email)) {
                            echo "<input type='email' name='email' value='".$email."'>";
                        }
                        else {
                            echo "<input type='email' name='email' value=''>";
                        }
                    ?>
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Edad</span>
                    <?php
                        echo "<input type='text' name='age' value='".$age."'>";
                    ?>
                </label>
            </div>
            
            <div class="form-row">
                <label><span>Sexo</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type='radio' name='sex' required <?php if (isset($sex) && $sex=="m") echo"checked";?> value='m'>
                            <span>Masculino</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type='radio' name='sex' required <?php if (isset($sex) && $sex=="f") echo"checked";?> value='f'>
                            <span>Femenino</span>
                        </label>
                    </div>

                </div>
            </div>
			
			<div class="form-row">
                <label>
                    <span><h4>Horario</h4></span>
					<span>Entrada</span>
                    <?php
                        echo "<input type='text' name='scheduleIn' value='".$entrada."'>";
                    ?>
                </label>
				<label>
					<span>Salida</span>
                    <?php
                        echo "<input type='text' name='scheduleOut' value='".$salida."'>";
                    ?>
				</label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Teléfonos</span>
                    <?php
                        echo "<input type='text' name='tel' value='".$phone."'>";
                    ?>
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Experiencia</span>
                    <?php
                        echo "<textarea name='exp' rows='10' cols='30'>".$exp."</textarea>";
                    ?>
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Descripción</span>
                    <?php
                        echo "<textarea name='description' rows='10' cols='30'>".$desc."</textarea>";
                    ?>
                </label>
            </div>

            <div class="form-row">
                <input type="submit" name="guardar" value="Guardar">
            </div>

        </form>

    </div>
	<!-- End of modify here-->
	</section>	<!--  end listing section  -->
	<!--  end footer  -->
	
</body>
</html>