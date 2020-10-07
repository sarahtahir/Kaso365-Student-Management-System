<?php

function getStudentInformation($studentID)
{
//create connection
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from studentinfo where studentID = '".$studentID."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function updateStudent(){
	
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	
$oldStudentID = $_POST['studentID'];
$newStudentID = $_POST['newStudentID'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$BOD = $_POST['BOD'];
$address = $_POST['address'];
$pname = $_POST['pname'];
$phonenum = $_POST['phonenum'];
	
$sql = "UPDATE studentinfo SET studentID='$newStudentID', name='$name', gender ='$gender', BOD='$BOD', address='$address', pname='$pname', phonenum ='$phonenum' WHERE studentID='$oldStudentID'";

$qry= mysqli_query($con,$sql);
return $qry;
	

}