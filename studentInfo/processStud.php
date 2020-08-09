<?php
include "student.php";

if(isSet($_POST['addStudButton']))
	{
	addNewStud();
	header('Location: studlist.php');
	}


?>