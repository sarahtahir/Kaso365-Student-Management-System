<?php
include "student.php";

print_r($_POST);

if(isSet($_POST['addStudButton']))
	{
	addNewStud();
	header('Location: ..\studentInfo\studentList\studentList.php');
	}


?>