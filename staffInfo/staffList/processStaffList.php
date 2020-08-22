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
	header('Location: ..\staffList\staffList.php?uploadsuccess');
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