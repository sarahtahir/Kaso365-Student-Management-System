<?php
 
session_start();
include "reset.php";
	
$_SESSION['staffID'] = $_POST['staffID'];

$staffID= $_POST['staffID']; 
$isValidID = validateStaffID($staffID);

if($isValidID)
	{	
		header("location: resetPassword.php"); // redirect to admin page
		}
else {
	echo '<div class="w3-container" style="width:80%; margin:0 auto;">';
	echo "<center><br><br>Wrong Staff ID";
	echo '<br><br span class="w3-right w3-padding w3-hide-large w3-large"><br><a href="../staffInfo/StaffID/StaffID.php">Try Again?</a></span>';
	echo '</div></center>';
	}
?>