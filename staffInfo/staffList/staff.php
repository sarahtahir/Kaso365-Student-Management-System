<?php

//addNewStud function================== it works
function addNewStaff()
{
$con = mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $staffID = $_POST['staffID'];
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $BOD = $_POST['BOD'];
 $phonenum = $_POST['phonenum'];
 $address = $_POST['address'];
 $position = $_POST['position'];	
  
  $sql="INSERT INTO staff(staffID, name, gender, BOD, phonenum, address, position)
	VALUES ('$staffID','$name','$gender','$BOD','$phonenum','$address', '$position')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 
}

//getListOfStaff function ==================// works too
function getListOfStaff()
{
//create connection
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from staff';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getStaffInfo()
{
	$con = mysqli_connect("localhost","kaso365","kaso365","kaso365");
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	}
	$staffID = $_POST["staffIDView"];
	$sqlStr = "select * from staff where staffID = '".$staffID."'";
	$qry = mysqli_query($con, $sqlStr);
	mysqli_close($con);
	return $qry;
}





?>