<?php
session_start();
$uname = $_POST['name'];
$email = $_POST['email'];
$aadhar = $_POST['aadhar'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$connection_details = mysqli_connect("localhost","root","","hotel");
if(!$connection_details)
{
	die("problem in connection establish");
}


if(isset($_POST['submit']))
{
$insert_query = "INSERT INTO user_data(name,email,aadhar,addr,contact,password,password2) VALUES('$uname','$email','$aadhar','$contact','$password','$password2')";
if(mysqli_query($connection_details,$insert_query))
{
	echo "data inserted successfully";
	echo "<script>alert('data stored')</script>";
	header("refresh:0,url=hotelform.html");
}
else{
    echo "<script>alert('data not stored')</script>";
	echo "unable to store data";
    header("refresh:0,url=hotelform.html");
}
}
?>