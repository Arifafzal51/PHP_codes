<?php
session_start();
if(isset($_SESSION['uname'])){
    echo "Welcome to logout screen";
}
else{
    
}
$username = "admin";
$password = "admin";

?>