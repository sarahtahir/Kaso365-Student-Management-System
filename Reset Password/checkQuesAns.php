<?php
 
session_start();
include "reset.php";
	
$staffID= $_SESSION['staffID']; 

$answer = $_POST['answer'];
$question=$_POST['question']; 

$isValidQuesAns = validateQuesAns($question,$answer,$staffID);

if($isValidQuesAns)
	{	
		header("location: ../changePass/changePassword.php "); // redirect to admin page
		}
else {
	
	print_r($_POST);
	echo '<div class="w3-container" style="width:80%; margin:0 auto;">';
	echo "<center><br><br>Wrong Staff ID";
	echo '<br><br span class="w3-right w3-padding w3-hide-large w3-large"><br><a href="../staffInfo/StaffID/StaffID.php">Try Again?</a></span>';
	echo '</div></center>';
	}
?>