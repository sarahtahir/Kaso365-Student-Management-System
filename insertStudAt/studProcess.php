<?php

include "attendance.php";

if(isSet($_POST['addBtn']))
	{
	addAttendance();
	header('Location: studAttendanceList.php');
	}



?>