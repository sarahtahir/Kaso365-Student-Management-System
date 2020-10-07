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
	staffPic();
	
	}

if(isSet($_POST['deleteStaffBtn']))
	{
	deleteStaff();
	
	
	}

?>