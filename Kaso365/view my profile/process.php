<?php
include 'profile.php';
	
if(isSet($_POST['updateStaffButton']))
{
	updateStaffInfo();
	header('Location: view my profile.php');
}

?>