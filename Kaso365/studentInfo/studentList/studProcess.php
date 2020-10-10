<?php

include "student.php";

if(isSet($_POST['viewStudBtn']))
	{
	getStudentInfo();
	header('Location: viewStudentInfo.php');
	}

if(isSet($_POST['deleteStudBtn']))
	{
	deleteStudent();
	echo "<script>";
	echo " alert('Student has been deleted.');
		</script>";
	header( "refresh:1; url=studentList.php" );
	}

?>