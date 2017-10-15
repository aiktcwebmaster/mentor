<?php 
session_start();

	if($_SESSION['loginuser']==null)
		header("location: login.php ");
	else {
		include("home.php");

	}

	?>
