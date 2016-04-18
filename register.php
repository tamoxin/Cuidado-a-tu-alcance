<?php

$nombrereg=$_POST['user'];
$passreg=$_POST['pass'];
$mailreg=$_POST['mail'];

$database="enfermeras";

$taken="false";
$username="root";
$password="";

if($nombrereg&&$passreg&&$mailreg){

	$con= mysqli_connect("localhost", $username, $password, $database) or die("Unable to connect");

	$insert = "INSERT INTO `users` VALUES (0,'$nombrereg', '$mailreg', '$passreg','',0,0,'','',0,'')";

	$con->query($insert);

	header('Location: profile.php');

}else{
	echo "Fill out every field";
}



?>