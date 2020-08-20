<?php
 
session_start();
include "password.php";
	
 

$staffID= $_SESSION['staffID']; 
$password = $_POST['password'];



resetPassword($password,$staffID);
header ("Location: ../index.html");


?>