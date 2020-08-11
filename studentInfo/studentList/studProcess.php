<?php

include "student.php";

if(isSet($_POST['viewStudBtn']))
	{
	getStudentInfo();
	header('Location: viewStudentInfo.php');
	}

?>