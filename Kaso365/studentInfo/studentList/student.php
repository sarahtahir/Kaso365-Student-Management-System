<?php

//addNewStud function==================
if (isset($_POST['addBtn']))
{
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $studentID = $_POST['studentID'];
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $BOD = $_POST['BOD'];
 $address = $_POST['address'];
 $pname = $_POST['pname'];
 $phonenum = $_POST['phonenum'];	
  
  $sql="INSERT INTO studentinfo(studentID, name, gender, BOD, address, pname, phonenum)
	VALUES ('$studentID','$name','$gender','$BOD','$address','$pname', '$phonenum')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 header('Location:studentList.php');
}

//getListOfStudent function ==================
function getListOfStudent()
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

function getStudentInfo()
{
	$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	}
	$studentID = $_POST["studentIDView"];
	$sqlStr = "select * from studentinfo where studentID = '".$studentID."'";
	$qry = mysqli_query($con, $sqlStr);
	mysqli_close($con);
	return $qry;
}

if (isset($_POST['deleteBtn']))
{
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $studentID = $_POST['deleteID'];
  
  $sql="delete from studentinfo where studentID ='".$studentID."'";
  $qry = mysqli_query($con,$sql);
  echo "<script>";
	echo " alert('Student has been deleted.');
		</script>";
	header( "refresh:1; url=studentList.php" );
  
};

function findName(){
	$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	}
	$sql = "select * from studentinfo where name like '%".$_POST['name']."%'";
    
    $qry = mysqli_query($con,$sql);//run query
    return $qry;  //return query
	
}

?>