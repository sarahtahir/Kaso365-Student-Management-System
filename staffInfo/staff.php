<?php

//addNewStud function================== it works
function addNewStaff()
{
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
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
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from staff';
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



?>