<?php

include "user.php";

if(isSet($_POST['viewUserBtn']))
	{
	getStudentInfo();
	header('Location: viewUserInfo.php');
	}

?>