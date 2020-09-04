<?php
include "student.php";



if(isSet($_POST['addStudButton']))
	{
	addNewStud();
	header('Location: ..\studentInfo\studentList\studentList.php');
	}



?>