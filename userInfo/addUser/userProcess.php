<?php

include "user.php";


if(isSet($_POST['addUserbtn']))
	{
	addNewUser();	
	header('Location: ../userList/userList.php');
	}


?>