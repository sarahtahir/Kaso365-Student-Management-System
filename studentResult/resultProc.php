<?php
include 'result.php';

if(isSet($_POST['addBtn'])){
	
	addMarks();
}

if(isSet($_POST['getMarksBtn'])){
	getMarks();
}

if(isSet($_POST['updateBtn'])){
	updateMarks();
	session_destroy();
	header('Location:studentResultList.php');
}
?>