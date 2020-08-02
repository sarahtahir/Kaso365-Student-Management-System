<?php
include "staff.php";

if(isSet($_POST['addStaffButton']))
	{
	addNewStaff();
	header('Location: staffList.php');
	}


?>