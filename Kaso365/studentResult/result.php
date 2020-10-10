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

if (isset($_POST['addBtn'])){
	
 $studList= getListStudent(); 

 while($row = mysqli_fetch_assoc($studList)) {
	 
	$studentID = $row['studentID']; //no problem here
    $name = $row['name'];
	$exam = $_POST['exam'];
	$year = $_POST['year'];
	$sirah=	$_POST["sirah".$row['studentID'].""];
	$akhlak= $_POST["akhlak".$row['studentID'].""];
	$ibadah= $_POST["ibadah".$row['studentID'].""];
	$akidah= $_POST["akidah".$row['studentID'].""];
	$jawi= $_POST["jawi".$row['studentID'].""];
	$alquran= $_POST["alquran".$row['studentID'].""];
						
		
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}	
	 $query = "INSERT INTO results(studentID, name, exam, year, sirah, akhlak, ibadah, akidah, jawi, alquran) VALUES ('$studentID','$name','$exam', '$year' , '$sirah','$akhlak', '$ibadah', '$akidah', '$jawi', '$alquran')";
	 

$sql = mysqli_query($con,$query);//run query

 }
header('Location:studentResultList.php');
}

function getMarks(){
session_start();
$_SESSION['exam']= $_POST['exam'];
$_SESSION['year'] = $_POST['year'];
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from results WHERE year='".$_POST['year']."' AND exam='".$_POST['exam']."'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getUpdateMarks(){
	
session_start();

$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from results WHERE year='".$_SESSION['year']."' AND exam='".$_SESSION['exam']."'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query	
}

if (isset($_POST['updateBtn'])){
	
session_start();	
$studList= getListStudent(); 

 while($row = mysqli_fetch_assoc($studList)) {
	 
	$studentID = $row['studentID']; //no problem here
    $name = $row['name'];
	$exam = $_SESSION['exam'];
	$year = $_SESSION['year'];
	$sirah=	$_POST["sirah".$row['studentID'].""];
	$akhlak= $_POST["akhlak".$row['studentID'].""];
	$ibadah= $_POST["ibadah".$row['studentID'].""];
	$akidah= $_POST["akidah".$row['studentID'].""];
	$jawi= $_POST["jawi".$row['studentID'].""];
	$alquran= $_POST["alquran".$row['studentID'].""];
						
		
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}	
	 $query = "UPDATE results SET sirah='$sirah', akhlak='$akhlak', ibadah='$ibadah', akidah='$akidah', jawi='$jawi', alquran='$alquran' WHERE studentID='$studentID' AND exam='$exam' AND year='$year'";	 
	
$sql = mysqli_query($con,$query);//run query

 }

	header('Location:studentResultList.php');
	
}