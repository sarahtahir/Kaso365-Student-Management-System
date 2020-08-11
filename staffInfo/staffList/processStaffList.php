<?php

include "staff.php";

if(isSet($_POST['viewStaffBtn']))
	{
	getStaffInfo();
	header('Location: viewStaffInfo.php');
	}

?>