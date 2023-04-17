<?php
session_start();
if(isset($_SESSION['uname'])){
    echo "Welcome to home screen";
}
else{
    if($username == $_POST['uname'] && $password['password'] == $_POST['upass']){
        $_SESSION['uname']= $username;
        header("refresh:0,url=home.php");
        echo "login successful";

    }
    else{
        echo "<script>alert('username ya password sahi se daal')</script>";
        header("refresh:3,url=login.html");

    }
    
}
$username = "admin";
$password = "admin";
/*
 userbound and timebound Session
*/
// remove all session variables
session_unset();  // remove all session variables by passing variable name


// destroy the session
session_destroy(); 

?>

