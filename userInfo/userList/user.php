<?php

function getListOfUser()
{
//create connection
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from users';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getUserInfo()
{
	$con = mysqli_connect("localhost","kaso365","kaso365","kaso365");
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	}
	$staffID = $_POST["staffIDView"];
	$sqlStr = "select * from users where staffID = '".$staffID."'";
	$qry = mysqli_query($con, $sqlStr);
	mysqli_close($con);
	return $qry;
}

?>
