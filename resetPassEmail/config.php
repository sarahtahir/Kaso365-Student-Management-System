<?php

$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}