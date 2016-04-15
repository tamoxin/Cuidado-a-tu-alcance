<?php

SESSION_START();

$inputuser=$_POST['user'];
$inputpass=$_POST['pass'];

$user="root";
$password="";
$database="enfermeras";

$connect=mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or ("database not found");

$query="SELECT * FROM `prueba` WHERE `user`='$inputuser'";
$querypass="SELECT FROM `prueba` WHERE `password`='$inputpass'";

$result=mysql_query($query);
$resultpass=mysql_query($querypass);

$row=mysql_fetch_array($result);
$rowpass=mysql_fetch_array($resultpass);

$serveruser=$row["user"];
$serverpass=$row["password"];

if($serveruser&&$serverpass){
	if(!$result){
		die("username or password is invalid");
	}

	mysql_close();

	if($inputpass==$serverpass){
		$_SESSION['user']=$inputuser;
		header('Location: index.php');
	}else{
		$_SESSION['attempt'] = $_SESSION['attempt'] + 1;
		header('Location: login.php');
	}
}

?>