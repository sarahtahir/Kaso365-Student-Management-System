<?php

include 'student.php';

if (isSet($_POST['updateStudButton'])){
	updateStudent();
	header('Location: ../studentList/studentList.php');
}