<?php
include "staff.php";

if(isSet($_POST['addStaffButton']))
	{
	addNewStaff();
	header('Location: staffList/staffList.php');
	}

if(isSet($_POST['updateStaffButton']))
{
	updateStaffInfo();
	header('Location: staffList/staffList.php');
}


?>