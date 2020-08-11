<?php
 
session_start();
include "password.php";
	
$_SESSION['staffID'] = $_POST['staffID'];

$staffID= $_POST['staffID']; 
$password = $_POST['password'];

resetPassword($password,$staffID);
header('Location: ../Login/Login.html');

?>