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

if(isSet($_POST['deleteStaffBtn']))
	{
	deleteStaff();
	echo "<script>";
	echo " alert('Staff has been deleted.');
		</script>";
	header( "refresh:1; url=staffList.php" );
	
	}

?>