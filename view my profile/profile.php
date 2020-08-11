<?php

//=================== getUserType
function getstaffID($username)
{
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM users where username = '".$username ."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
if($count == 1){
	$row = mysqli_fetch_assoc($result);
	$staffID=$row['staffID'];
	return $staffID;
	}
 }

function getProfileInfo($staffID)
{
	$con = mysqli_connect("localhost","kaso365","kaso365","kaso365");
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	}
	
	$sqlStr = "select * from staff where staffID = '".$staffID."'";
	$qry = mysqli_query($con, $sqlStr);
	mysqli_close($con);
	return $qry;
}

?>