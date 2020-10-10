<?php

include "user.php";

if(isSet($_POST['viewUserBtn']))
	{
	getStudentInfo();
	header('Location: viewUserInfo.php');
	}

if(isSet($_POST['deleteUserBtn']))
	{
	deleteUser();
	echo "<script>";
	echo " alert('User has been deleted.');
		</script>";
	header( "refresh:1; url=userList.php" );
	}
?>