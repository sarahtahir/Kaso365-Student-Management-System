<?php

$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	
$file = $_FILES['file'];
$staffID = $_POST['staffIDPic'];
	
 $fileName = $_FILES['file']['name'];	
 $fileTmpName = $_FILES['file']['tmp_name'];
 $fileSize = $_FILES['file']['size'];
 $fileError = $_FILES['file']['error'];
 $fileType = $_FILES['file']['type'];
	
 $fileExt = explode ('.', $fileName );
 $fileActualExt = strtolower(end($fileExt));
 
 $fileActualExt;
	
 $allowed = array('jpg', 'jpeg', 'png', 'pdf');
	
 $fileNameNew = "pic".$staffID.".".$fileActualExt;
 $fileDestination = '../staffInfo/staffList/profilepic/'.$fileNameNew;
	
 



$sql="UPDATE staff SET fileEXT = '".$fileActualExt."' WHERE staffID = '".$staffID."'";
 
$qry = mysqli_query($con,$sql);
	
 move_uploaded_file($fileTmpName, $fileDestination);
 header( "refresh:1; url=view my profile.php" ); 

?>