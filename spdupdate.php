<?php
	include("head.php");
	include("connection.php");

	$rollno = $_SESSION['loginuser'];
	$gender = $_POST['gender'];	
	$name = $_POST['fullname'];
	$yoa = $_POST['yoa'];
	$dob = $_POST['dob'];	
	$phoneno = $_POST['phoneno'];	
	$dept = $_POST['dept'];	
	$batch = $_POST['batch'];	
	$type = $_POST['type'];	
	$email = $_POST['email'];	
	$address = $_POST['address'];

	
	if(isset($_POST['submitbasic']))
	{

	$upd = "update students_basic 
			set fullname = '$name', 
			yoa = $yoa,
			dob = '$dob',
			phoneno = $phoneno,
			gender = '$gender',
			dept = '$dept',
			batch = '$batch',
			type = '$type',
			email = '$email',
			address = '$address'
			where rollno = '$rollno' ";

	echo $upd;
	}

	if(isset($_POST['submitacademic']))
	{
		$sscmarks = $_POST['sscmarks'];
		$sscyear = $_POST['sscyear'];
		$sscremarks = $_POST['sscremarks'];

		$hscmarks = $_POST['hscmarks'];
		$hscyear = $_POST['hscyear'];
		$hscremarks = $_POST['hscremarks'];
		
		$dipmarks = $_POST['dipmarks'];
		$dipyear = $_POST['dipyear'];
		$dipremarks = $_POST['dipremarks'];
		
		$update = "update academic set
				sscmarks = '$sscmarks',
				sscyear = $sscyear,
				sscremarks = '$sscmarks',

				hscmarks = '$hscmarks',
				hscyear = $hscyear,
				hscremarks = '$hscmarks',

				dipmarks = '$dipmarks',
				dipyear = $dipyear,
				dipremarks = '$dipremarks'
				where rollno = '$rollno';"

		echo $update;	

	}

	if(isset($_POST['submitsurvey']))
	{
		echo "Welcome ";
		$sem = $_POST['sem'];
		$course = $_POST['course'];

		$co1 = $_POST['co1'];
		$co2 = $_POST['co2'];
		$co3 = $_POST['co3'];
		$co4 = $_POST['co4'];
		$co5 = $_POST['co5'];
		$co6 = $_POST['co6'];

		//$sql = "insert into survey values ('$rollno','$name','$sem', '$batch', '$course', '$co1','$co2','$co3','$co4','$co5','$co6')";
		
		echo $sql;

	}

?>
