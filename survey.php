<?php 

	include("navbar.php"); 
	include('connection.php');
	$rollno = $_SESSION['loginuser'];

	$basic = "select * from students_basic where rollno = '$rollno' ";
	$resultbasic = mysqli_query($con, $basic);

	while($row = mysqli_fetch_assoc($resultbasic))
		{
			$_SESSION['role']=$row['role'];
?>

<div class="container bg-info">

<form action="postsurvey.php" method="post" class="form-group">
	<div class="row">
		<h2 class="bg-success text-center text-primary">AIKTC, SoET, New Panvel</h2>
		<h2 class="bg-primary text-center text-success">Course Exit Survey - TECO</h2>

 	</div>

	<div class="row">
		<div class="col-md-8">
		<label>Name of Student</label>

		<input disabled name="fullname" value="<?php echo $row[fullname]; ?>" class="form-control" type="text"  >
		</div>
		<div class="col-md-4">

		<label>Roll No</label>
		<input value="<?php echo $row[rollno]; ?>" disabled class="form-control" type="text" >
		</div>
	</div>


	<div class="row">
		<div class="col-md-3">
			<label> Batch</label>
			<input type="text" disabled value="<?php echo $row[batch]; ?>" name="batch" class="form-control">
				
			</select> 
		</div>
		
		<div class="col-md-3">
			<label> Semester</label>
			<input type="text" disabled value="5" name="sem" class="form-control">
					
		</div>

		<div class="col-md-3">
			<label> Course</label>
			<select name="course" class="form-control">
				
				<option value="OS TH"> OS TH </option>
				<option value="CN"> CN </option>
				<option value="MP TH"> MP TH </option>
				<option value="SOAD"> SOAD </option>
				<option value="WTL"> WTL </option>
				<option value="OS PR"> OS PR </option>
				<option value="MP PR"> MP PR </option>
				<option value="BCE"> BCE </option>

			</select> 
		</div>
	</div>


<?php

	}
?>
	<br>

	<div class="row">

		<table class="table table-bordered table-hover table-striped">
			<tr>
				<th>Sr. No.</th>
				<th>Course Outcomes </th>
				<th>Low</th>
				<th>Medium</th>
				<th>High</th>
				
			</tr>
		<tr>
			<td>1 </td>
			<td> Get an overview of the Web Technologies concepts and HTML.</td>
			<td><input type="radio" name="co1" value="1"></td>
			<td><input type="radio" name="co1" value="2"></td>
			<td><input type="radio" name="co1" value="3"></td>
		</tr>

		<tr>
			<td>2 </td>
			<td>Learn & define a CSS and understand its purpose, different syntax and types of CSS.</td>
			<td><input type="radio" name="co2" value="1"></td>
			<td><input type="radio" name="co2" value="2"></td>
			<td><input type="radio" name="co2" value="3"></td>
		</tr>

		<tr>
			<td>3</td>
			<td> Learn client side scripting with its advantages and disadvantages and understand dynamic
HTML.</td>
			<td><input type="radio" name="co3" value="1"></td>
			<td><input type="radio" name="co3" value="2"></td>
			<td><input type="radio" name="co3" value="3"></td>
		</tr>

		<tr>
			<td>4 </td>
			<td> Learn how to use editors for development of web pages.</td>
			<td><input type="radio" name="co4" value="1"></td>
			<td><input type="radio" name="co4" value="2"></td>
			<td><input type="radio" name="co4" value="3"></td>
		</tr>

		<tr>
			<td>5 </td>
			<td> Learn basics of XML and how it can be used to store information away from the mechanism of
processing or formatting of such data.</td>
			<td><input type="radio" name="co5" value="1"></td>
			<td><input type="radio" name="co5" value="2"></td>
			<td><input type="radio" name="co5" value="3"></td>
		</tr>

		<tr>
			<td> 6 </td>
			<td> Understand basic introduction of PHP and dynamic programming on the server side.</td>
			<td><input type="radio" name="co6" value="1"></td>
			<td><input type="radio" name="co6" value="2"></td>
			<td><input type="radio" name="co6" value="3"></td>
		</tr>

		<tr>
			<td colspan="5"><input class="btn btn-primary form-control" type="submit" name="submitsurvey" value="Submit">
			</td>
		</tr>
		</table>
	</div>

</div>
</form>
</div>
