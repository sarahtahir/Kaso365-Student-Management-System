<?php

include "user.php";


if(isSet($_POST['updateUserBtn']))
	{
	updateUser();	
	header('Location: ../userList/userList.php');
	}


?>