<?php
// establishing the MySqli connection 

SESSION_START();

$con = mysqli_connect("localhost","root","","enfermeras");

if(mysqli_connect_errno()) {
    echo "MySQLi Connection was not stablished:".mysqli_connect_error();
}

// checking the user_error

if(isset($_POST['login'])) {
    
    $username = mysqli_real_escape_string($con,$_POST['user']);
    
    $pass = mysqli_real_escape_string($con,$_POST['pass']);
    
    $sel_user = "select * from users where username='$username' AND password='$pass'";
    
    $run_user = mysqli_query($con, $sel_user);
    
    $check_user = mysqli_num_rows($run_user); 
    
    if($check_user > 0) {
        while($arr = mysqli_fetch_array($run_user, MYSQLI_ASSOC)) {
            $_SESSION['id']= $arr["user_id"];
            $_SESSION['user'] = $arr["username"];
        }
        mysql_close();
        header('Location: profile.php');
    }
    else {
        $_SESSION['attempt'] = $_SESSION['attempt'] + 1;
        mysql_close();
        header('Location: login.php');
    }   
}

?>