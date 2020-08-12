<?php

session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	header ("Location: ../../Login/Login.html");
}
?>