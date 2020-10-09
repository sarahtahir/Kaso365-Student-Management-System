<?php


function getListStudent()
{
//create connection
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from studentinfo';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

if(isSet($_POST['addBtn'])){
	
 $studList= getListStudent(); 

 while($row = mysqli_fetch_assoc($studList)) {
	 
	$studentID = $row['studentID'];
    $name = $row['name'];
	$attendance_status=	$_POST["attendance_status".$row['studentID'].""];
	$attendance_date = $_POST['attendance_date'];					
		
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}	
	 $query = "INSERT INTO studentattendance(studentID, name, attendance_status, attendance_date) VALUES ('$studentID','$name','$attendance_status','$attendance_date')";
	 
	
$sql = mysqli_query($con,$query);//run query

 }
header('Location: studAttendanceList.php');
}

function getAttendance() {
session_start();
$_SESSION['attendance_date']= $_POST['attendance_date'];	
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from studentattendance WHERE attendance_date='".$_POST['attendance_date']."'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

if (isset($_POST['updateBtn'])) {
session_start();	
$attendance_date= $_SESSION['attendance_date'];
$attendance_status=$_POST['attendance_status'];
$studentID= $_POST['studentID'];


$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}	
	 $query = "UPDATE studentattendance SET attendance_status='$attendance_status' WHERE studentID='$studentID' AND attendance_date='$attendance_date'";	 
	
$sql = mysqli_query($con,$query);//run query

header('Location:studAttendanceList.php');
}


