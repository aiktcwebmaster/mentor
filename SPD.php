<?php 

	include('navbar.php');
	include('connection.php');
	
	$rollno = $_SESSION['loginuser'];

	$basic = "select * from students_basic where rollno = '$rollno' ";
	
	$academic = "select * from academic where rollno = '$rollno' ";
	
	$achievements = "select * from achievements where rollno = '$rollno' ";
	
	$family = "select * from family where rollno = '$rollno' ";
	
	$resultbasic = mysqli_query($con, $basic);
	$resultacademic = mysqli_query($con, $academic);
	$resultachievements = mysqli_query($con, $achievements);
	$resultfamily = mysqli_query($con, $family);

	if((mysqli_num_rows($resultbasic) == 1) or (mysqli_num_rows($resultacademic) == 1) or (mysqli_num_rows($resultachievements) == 1) or (mysqli_num_rows($resultfamily) == 1))
	{
		while($row = mysqli_fetch_assoc($resultbasic))
		{

			$_SESSION['role']=$row['role'];

?>
<div class="container bg-info">

<form action="spdupdate.php" method="post" class="form-group">
	<div class="row">
		<h2 class="bg-success text-center text-primary">AIKTC, SoET, New Panvel</h2>
		<h2 class="bg-primary text-center text-success">STUDENT PERSONAL DETAILS</h2>

 	</div>

	<div class="row">
		<div class="col-md-8">
		<label>Name of Student</label>

		<input name="fullname" value="<?php echo $row[fullname]; ?>" class="form-control" type="text"  >
		</div>
		<div class="col-md-4">

		<label>Roll No</label>
		<input value="<?php echo $row[rollno]; ?>" disabled class="form-control" type="text" >
		</div>

	</div>
		<br/>
	<div class="row">
		<div class="col-md-2">

		<label>Year of Admission</label>
		<input name="yoa" value="<?php echo $row[yoa]; ?>" class="form-control" type="text"  >
		</div>

		<div class="col-md-3">

		<label>Date of Birth</label>
		<input name="dob" value="<?php echo $row[dob]; ?>" class="form-control" type="text" >
		</div>

		<div class="col-md-3">

		<label>Department</label>
		<input name="dept" value="<?php echo $row[dept]; ?>" class="form-control" type="text" >
		</div>
		<div class="col-md-3">
		<label class="radio-inline" ><strong>Regular</strong>
		<input class="form-control" value="Regular" <?php if($row[type] == "Regular"){ echo 'checked'; } ?> type="radio" name="type"> </label>

		<label class="radio-inline" ><strong>Diploma</strong>
		<input class="form-control" value="Diploma" <?php if($row[type] == "Diploma"){ echo 'checked'; } ?> type="radio" name="type"> </label>

		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-md-4">

		<label>Contact No</label>
		<input name="phoneno" value="<?php echo $row[phoneno]; ?>" class="form-control" type="text" >
		</div>

		<div class="col-md-2">

		<label class="radio-inline" ><strong>Male</strong>
		<input class="form-control" value="male" <?php if($row[gender] == "male"){ echo 'checked'; } ?> type="radio" name="gender"> </label>

		<label class="radio-inline" ><strong>Female</strong>
		<input class="form-control" value="female" <?php if($row[gender] == "female"){ echo 'checked'; } ?>  type="radio" name="gender" > </label>

		</div>

		<div class="col-md-2">
			<label> Batch</label>
			<select name="batch" class="form-control">
				<option value="<?php echo $row[batch]; ?>" > <?php echo $row[batch]; ?> </option>
				<option value="1"> 1 </option>
				<option value="2"> 2 </option>
				<option value="3"> 3 </option>
				<option value="4"> 4 </option>
			</select> 
		</div>

		<div class="col-md-4">
			<label> Email ID</label>
			<input value="<?php echo $row[email]; ?>" type="text" name="email" class="form-control">
		</div>

	</div>
	<br/>
	<div class="row">
		<div class="col-md-10">
			<label> Residential Address</label>
			<input value="<?php echo $row[address]; ?>" type="text" name="address" class="form-control">
		</div>
	
	<div class="col-md-2">
		<label></label>
		<input type="submit" name="submitbasic" value="UPDATE" class="btn btn-block btn-primary btn-sm" >
	</div>
	</div>
</form>

<?php

	}

	while($row = mysqli_fetch_assoc($resultfamily))
	{
	
	?>

	<div class="row">
		<h2 class="text-center text-success
		 bg-primary"> FAMILY BACKGROUND</h2>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Relation</th>
			<th>Age</th>
			<th>Qualification</th>
			<th>Profession</th>
			<th>Remark</th>
		</tr>

		<tr>
			<td>1</td>
			<td><input value="<?php echo $row[name]; ?>"class="form-control" type="text" ></td>
			<td><input value="<?php echo $row[relation]; ?>"class="form-control" type="text" ></td>
			<td><input value="<?php echo $row[age]; ?>"class="form-control" type="text" ></td>
			<td><input value="<?php echo $row[qualification]; ?>"class="form-control" type="text" ></td>
			<td><input value="<?php echo $row[profession]; ?>"class="form-control" type="text" ></td>
			<td><input disabled value="<?php echo $row[remark]; ?>"class="form-control" type="text" ></td>
		</tr>

		<tr>
			<td>2</td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>

			<td><input class="form-control" type="text" ></td>
			<td><input disabled class="form-control" type="text" ></td>
		</tr>
		<tr>
			<td>3</td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>

			<td><input class="form-control" type="text" ></td>
			<td><input disabled class="form-control" type="text" ></td>
		</tr>
		<tr>
			<td>4</td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>
			<td><input class="form-control" type="text" ></td>

			<td><input class="form-control" type="text" ></td>
			<td><input disabled class="form-control" type="text" ></td>
		</tr>
		</table>

	</div>
<?php
	}

	while($row = mysqli_fetch_assoc($resultacademic))
	{
	
	?>

<form action="spdupdate.php" action="post" class="form-group">
	<div class="row">
		<h2 class="bg-primary text-success text-center"> ACADEMIC /  CURRICULAR ACHIEVEMENTS</h2>
		<table class="table table-hover table-bordered">
			<tr>
				<th class="text-center" rowspan="2">Levels</th>
				<th class="text-center" colspan="3">SSC</th>
				<th class="text-center" colspan="3">HSC</th>
				<th class="text-center" colspan="3">Diploma</th>
			</tr>
			<tr>
				
				<td class="text-center" >Marks</td>
				<td class="text-center" >Year</td>
				<td class="text-center" >Remarks</td>
				
				<td class="text-center" >Marks</td>
				<td class="text-center">Year</td>
				<td class="text-center" >Remarks</td>
				
				<td class="text-center">Marks</td>
				<td class="text-center">Year</td>
				<td class="text-center">Remarks</td>
			</tr>
			<tr>
				<td> Result</td>
				<td> <input name="sscmarks" value="<?php echo $row[sscmarks]; ?>" type="text" class="form-control"></td>
				
				<td> <input name="sscyear" value="<?php echo $row[sscyear]; ?>"type="text" class="form-control"></td>
				
				<td> <input name="sscremarks" value="<?php echo $row[sscremarks]; ?>"type="text" class="form-control"></td>
				
				<td> <input name="hscmarks" value="<?php echo $row[hscmarks]; ?>"type="text" class="form-control"></td>
				
				<td> <input name="hscyear" value="<?php echo $row[hscyear]; ?>"type="text" class="form-control"></td>
				
				<td> <input name="hscremarks" value="<?php echo $row[hscremarks]; ?>"type="text" class="form-control"></td>
				
				<td> <input name="dipmarks" value="<?php echo $row[dipmarks]; ?>"type="text" class="form-control"></td>
				
				<td> <input name="dipyear" value="<?php echo $row[dipyear]; ?>"type="text" class="form-control"></td>
				
				<td> <input name="dipremark" value="<?php echo $row[dipremark]; ?>"type="text" class="form-control"></td>
			</tr>
		<tr>
			<td colspan="5"></td>
		<td>
			<input type="submit" name="submitacademic" value="UPDATE" class="btn btn-block btn-primary btn-sm" >
		</td>
		<td colspan="4"></td>
		</tr>
		</table>
	


<?php

	}

	while($row = mysqli_fetch_assoc($resultachievements))
	{
	
	?>
</div>
	</form>

	<div class="row">
		<div class="col-md-12">
			<h2 class="bg-primary text-success text-center"> CO CURRICULAR ACTIVITIES</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-1">
			<label>SSC</label>
		</div>
		<div class="col-md-11">
			<input name="cossc"  value="<?php echo $row[cossc]; ?>"type="text" class="form-control">		
		</div>
	</div>

	<div class="row">
		<div class="col-md-1">
			<label>HSC</label>
		</div>
		<div class="col-md-11">
			<input name="cohsc" value="<?php echo $row[cohsc]; ?>"type="text" class="form-control">		
		</div>
	</div>

	<div class="row">
		<div class="col-md-1">
			<label>Diploma</label>
		</div>
		<div class="col-md-11">
			<input name="codip" value="<?php echo $row[codip]; ?>"type="text" class="form-control">		
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2 class="bg-primary text-success text-center"> EXTRA CURRICULAR ACTIVITIES</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-1">
			<label>SSC</label>
		</div>
		<div class="col-md-11">
			<input name="extrassc" value="<?php echo $row[extrassc]; ?>" type="text" class="form-control">		
		</div>
	</div>

	<div class="row">
		<div class="col-md-1">
			<label>HSC</label>
		</div>
		<div class="col-md-11">
			<input name="extrahsc" value="<?php echo $row[extrahsc]; ?>" type="text" class="form-control">		
		</div>
	</div>

	<div class="row">
		<div class="col-md-1">
			<label>Diploma</label>
		</div>
		<div class="col-md-11">
			<input name="extradip" value="<?php echo $row[extradip]; ?>" type="text" class="form-control">		
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2 class="bg-primary text-success text-center"> HOBBY / INTEREST</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<input name="hobby" value="<?php echo $row[hobby]; ?>" type="text" class="form-control">		
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h2 class="bg-primary text-success text-center"> STRENGTHS</h2>

		</div>
		<div class="col-md-6">
			<h2 class="bg-primary text-success text-center"> WEAKNESS</h2>
			
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<input name="strength" value="<?php echo $row[strength]; ?>" type="text" class="form-control">		
		
		</div>
		<div class="col-md-6">
			<input name="weakness" value="<?php echo $row[weakness]; ?>" type="text" class="form-control">		
		</div>
	</div>
<br>
	<div class="row">
		<div class="col-md-12 text-center">

	<input type="submit" name="submitacademic" value="UPDATE" class="btn btn-block btn-primary btn-sm" >
		</div>
	</div>

	<hr/>
	
	</div>

<?php 
		}
	}
mysqli_close($con);

include("footer.php");
?>
