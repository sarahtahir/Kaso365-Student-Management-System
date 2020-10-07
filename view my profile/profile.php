<?php

//=================== getUserType
function getstaffID($username)
{
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
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
	$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	}
	
	$sqlStr = "select * from staff where staffID = '".$staffID."'";
	$qry = mysqli_query($con, $sqlStr);
	mysqli_close($con);
	return $qry;
}

function getStaffInformation($staffID)
{
//create connection
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from staff where staffID = '".$staffID."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function updateStaffInfo(){
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	
$oldStaffID = $_POST['staffID'];
$newStaffID = $_POST['newStaffID'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$BOD = $_POST['BOD'];
$address = $_POST['address'];
$position = $_POST['position'];
$phonenum = $_POST['phonenum'];
	
$sql = "UPDATE staff SET staffID='$newStaffID', name='$name', gender ='$gender', BOD='$BOD', address='$address', position='$position', phonenum ='$phonenum' WHERE staffID='$oldStaffID'";

$qry= mysqli_query($con,$sql);
return $qry;	
}

?>