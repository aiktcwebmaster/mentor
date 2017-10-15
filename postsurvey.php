<?php
	include("navbar.php");
	include("connection.php");
?>

<div class="container bg-info">
	<div class="bg-info text-center">
		<h2>
<?php
	$rollno = $_SESSION['loginuser'];

	$sem = $_POST['sem'];	
	$batch = $_POST['batch'];	
	$course = $_POST['course'];

	
		$co1 = $_POST['co1'];
		$co2 = $_POST['co2'];
		$co3 = $_POST['co3'];
		$co4 = $_POST['co4'];
		$co5 = $_POST['co5'];
		$co6 = $_POST['co6'];

		$sql = "insert into survey (rollno, sem, course, batch, co1, co2, co3, co4, co5, co6) values ('$rollno','$sem', '$course','$batch', '$co1','$co2','$co3','$co4','$co5','$co6')";
		

		$result = mysqli_query($con, $sql);

		if($result)
		{
			echo "Thank you for submitting Course Exit Survey";

		}
		else
		{
			echo "Error. Please try again".mysqli_error($con);
		}
?>
		</h2>
	</div>
</div>
