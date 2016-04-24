<?php

SESSION_START();

$nombrereg=$_POST['user'];
$passreg=$_POST['pass'];
$mailreg=$_POST['mail'];
$codereg=$_POST['code'];

$database="enfermeras";

$taken="false";
$username="root";
$password="";

if($nombrereg&&$passreg&&$mailreg&&$codereg){

	$con= mysqli_connect("localhost", $username, $password, $database) or die("Unable to connect");

	$codigo = mysqli_real_escape_string($con,$_POST['code']);
    
    $sel_user = "select * from codigos where codigo='$codigo'";
    
    $run_user = mysqli_query($con, $sel_user);
    
    $check_user = mysqli_num_rows($run_user); 

    if($check_user>0){
    	$insert = "INSERT INTO `users` VALUES (0,'$nombrereg', '$mailreg', '$passreg','',0,0,0,'','',0,'')";

		$con->query($insert);
		
		$id =  mysql_fetch_row(mysqli_query($con, "select user_id from users where username='$nombrereg' AND password='$passreg'"))[0];
        $_SESSION['id'] = $id;
		$_SESSION['user'] = $nombrereg;

		$delete= "DELETE FROM codigos WHERE codigo='$codigo'";

		$con->query($delete);

		header('Location: profile.php');
    }

}else{
	echo "Fill out every field";
}



?>