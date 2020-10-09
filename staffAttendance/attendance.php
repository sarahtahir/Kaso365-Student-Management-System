<?php


function getListStaff()
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

if(isSet($_POST['addBtn']))
 {	
 $staffList= getListStaff(); 

 while($row = mysqli_fetch_assoc($staffList)) {
	 
	$staffID = $row['staffID'];
    $name = $row['name'];
	$attendance_status=	$_POST["attendance_status".$row['staffID'].""];
	$attendance_date = $_POST['attendance_date'];					
		
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}	
	 $query = "INSERT INTO staffattendance(staffID, name, attendance_status, attendance_date) VALUES ('$staffID','$name','$attendance_status','$attendance_date')";
	 
	
$sql = mysqli_query($con,$query);//run query

 }
header('Location: staffAttendanceList.php');	
}

function getAttendance() {
session_start();
$_SESSION['attendance_date']=$_POST['attendance_date'];
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from staffattendance WHERE attendance_date='".$_POST['attendance_date']."'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

if (isset($_POST['updateBtn'])) {
session_start();	
$attendance_date= $_SESSION['attendance_date'];
$attendance_status=$_POST['attendance_status'];
$staffID= $_POST['staffID'];


$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}	
	 $query = "UPDATE staffattendance SET attendance_status='$attendance_status' WHERE staffID='$staffID' AND attendance_date='$attendance_date'";	 
	
$sql = mysqli_query($con,$query);//run query

header('Location:staffAttendanceList.php');
}



