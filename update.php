<?php

SESSION_START();

$database="enfermeras";
$username="root";
$password="";

$id = $_SESSION['id'];
var_dump($id);

$con= mysqli_connect("localhost", $username, $password, $database) or die("Unable to connect");

if(isset($_POST['guardar'])){
	$newName=$_POST['name'];
	$newTel=$_POST['tel'];
	$newEmail=$_POST['email'];
	$newDesc=$_POST['description'];
	$newAge=$_POST['age'];
	$newEnt=$_POST['scheduleIn'];
	$newSal=$_POST['scheduleOut'];
	$newExp=$_POST['exp'];
	$newSex=$_POST['sex'];
	$sql="UPDATE users SET email='$newEmail', description='$newDesc', age='$newAge', entrada='$newEnt', salida='$newSal', experience='$newExp', telephone='$newTel', name='$newName' WHERE user_id='$id'";

	$con->query($sql);

	mysqli_close();

	header('Location: profile.php');
}
?>