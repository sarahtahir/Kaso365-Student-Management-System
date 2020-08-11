<?php
 
session_start();
include "user.php";
	
$_SESSION['username'] = $_POST['username'];
$_SESSION['password']=$_POST['password'];  

$username= $_POST['username'];
$password=$_POST['password']; 

$isValidUser = validatePassword($username,$password);

if($isValidUser)
	{
	$userType=getUserType($username);
	if($userType =='Admin')
		header("location:../ADMIN/adminDashboard.php"); // redirect to admin page
	else if($userType =='Staff')
		header("location: ../staffInfo/staffDashboard/staffDashboard.php"); // redirect to staff menu menu page
	
	}
else {
	echo '<div class="w3-container" style="width:80%; margin:0 auto;">';
	echo "<center><br><br>Wrong Username or Password";
	echo '<br><br span class="w3-right w3-padding w3-hide-large w3-large"><br><a href="Login.html">Try Again?</a></span>';
	echo '</div></center>';
	}
?>