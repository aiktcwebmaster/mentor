<?php
	include("head.php");

	echo "<div class='container'>";

	include("connection.php");


	// local - within the function
	// global - within the page/ document / file

	// superglobal - across multiple pages / documents / files


	if(isset($_POST['signupform']))
	{

	$rollno = $fname = $dept = $type = $pwd = $phoneno = $email = $address = $gender = $dob = $doa = "";


	$rollno = $_POST['rollno'];
	$fname = $_POST['fullname'];
	

	$yoa = $_POST['yoa'];
	//echo $yoa."<br/>";

	$dob = $_POST['dob'];
	//echo $dob."<br/>";

	$dept = $_POST['dept'];
	//echo $dept."<br/>";

	$type = $_POST['type'];
	//echo $type."<br/>";
	
	$pwd = $_POST['pwd'];
	//echo $pwd."<br/>";

	$repwd = $_POST['repwd'];
	//echo $repwd."<br/>";

	if($pwd != $repwd)
	{
		echo "Your password does not match. Please try entering correct passwords";
		break;
	}
	$pwd = md5($pwd);
//	echo $pwd."<br>";

	$phoneno = $_POST['phoneno'];
//	echo $phoneno."<br/>";
	
	$email = $_POST['email'];
//	echo $email."<br/>";
	
	$address = $_POST['address'];
//	echo $address."<br/>";
	
	$gender = $_POST['gender'];
//	echo $gender."<br/>";
	
	echo "<hr>";

	$sql = "insert into students_basic values ('$rollno', '$fname', '$yoa', '$dob', $phoneno, '$gender', '$dept','$type','$email','$address','$pwd') ";

	//echo $sql;

	$result = mysqli_query($con, $sql);

	//echo $result;
	echo "<hr>";

	if(!$result)
	{
		echo "<div class='alert alert-danger'><strong>Error</strong> in creating your profile. <br>".mysqli_error($con);
		echo "</div>";
	}
	else
	{
		echo "<div class='alert alert-success'> <strong>Success!</strong> Thank you for registering on AIKTC Mentors. <br/>";
		echo "<a href='login.php'> Click here</a> to login</div>";
	}

	}	

	if(isset($_POST['loginform']))
	{
		$rollno = $_POST['rollno'];
		$pwd = $_POST['pwd'];

		$pwd = md5($pwd);

		$sql = "select * from students_basic where rollno = '$rollno' and pwd = '$pwd' ";

		echo $sql;

		$result = mysqli_query($con, $sql);
		$rows = mysqli_num_rows($result);

		if($rows==1)
		{
			echo "Thank you for login in ".$rollno;
			$_SESSION['loginuser'] = $rollno;
			header("location: home.php");

		}
		else
		{
			echo "Invalid username or password";
		}


	}


	if(isset($_GET['contactform']))
	{
		$name = $email = $subject = $message= "";

		$name = $_GET['name'];
		$email = $_GET['email'];
		$subject = $_GET['subject'];
		$message = $_GET['message'];

		$sql = "insert into contact (name, email, subject, message) values ('$name', '$email', '$subject', '$message') ";

		//echo $sql;
		$result = mysqli_query($con, $sql);
		
		if($result)
		{
			echo "Thank you for giving your suggestions. We would get back to you";
		}
		else
		{
			echo "Error ";
		}
	}

	echo "</div>";
?>