<?php

include "staff.php";

if(isSet($_POST['viewStaffBtn']))
	{
	getStaffInfo();
	header('Location: viewStaffInfo.php');
	}

if(isSet($_POST['addStaffButton']))
	{
	addNewStaff();
	header('Location: ..\staffList\staffList.php');
	}

?>