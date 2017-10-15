<?php include("navbar.php");

	include('connection.php');
	$rollno = $_SESSION['loginuser'];

	$basic = "select * from students_basic where rollno = '$rollno' ";
	
	
	$resultbasic = mysqli_query($con, $basic);
	
	if((mysqli_num_rows($resultbasic) == 1))
	{
		while($row = mysqli_fetch_assoc($resultbasic))
		{

			$_SESSION['role']=$row['role'];
 ?>

<div class="container">

	<div class="row">

		<h2 class="text-primary text-center bg-success"> AIKTC, SoET, New Panvel</h2>

		<h2 class="text-success text-center bg-info">
		STUDENT PROGRESS REPORT</h2>

	</div>

	<div class="row">
		<div class="col-md-12">

			<label> Name of Student</label>
			<input disabled type="text" value="<?php echo $row[fullname]; ?>" class="form-control" name="fullname" >

		</div>
	</div>

	<div class="row">

		<div class="col-md-4">
			<label> Year of Admission</label>
			<input disabled type="text" value="<?php echo $row[yoa]; ?>" class="form-control" name="yoa">
		</div>

		<div class="col-md-4">
			<label> Department</label>
			<select disabled class="form-control" >
				<option value="<?php echo $row[dept]; ?>"><?php echo $row[dept]; ?> </option>
			</select>
		</div>


		<div class="col-md-4">
			<label> Roll No </label>
			<input disabled value="<?php echo $row[rollno]; ?>" type="text" class="form-control" >
		</div>

	</div>
	<br/>
	<div class="row">
		<div class="col-md-12">

			<table class="table table-bordered table-striped">
				<tr>
					<th rowspan="2">Semester</th>
					<th rowspan="2">Exam</th>
					<th rowspan="2">Seat No</th>
					<th rowspan="2">Result</th>
					<th rowspan="2">SGPI</th>
					<th colspan="3">If passed in ATKT Exam</th>
					<th rowspan="2">No of Attempt</th>
					<th rowspan="2">Rank in Class</th>
					<th rowspan="2">Remark</th>
					<th rowspan="2">Verified by Mentor</th>
				</tr>

				<tr>
					<th>Exam </th>
					<th>Seat No</th>
					<th>SGPI </th>
				</tr>

				<tr>
					<td><b>SEM 1</b></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="checkbox" class="form-control"></td>
				</tr>
				<tr>
					<td><b>SEM 2</b></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="checkbox" class="form-control"></td>
				</tr>
				<tr>
					<td><b>SEM 3</b></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="checkbox" class="form-control"></td>
				</tr>
				<tr>
					<td><b>SEM 4</b></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="checkbox" class="form-control"></td>
				</tr>
				<tr>
					<td><b>SEM 5</b></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="checkbox" class="form-control"></td>
				</tr>
				<tr>
					<td><b>SEM 6</b></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="checkbox" class="form-control"></td>
				</tr>
				<tr>
					<td><b>SEM 7</b></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="checkbox" class="form-control"></td>
				</tr>
				<tr>
					<td><b>SEM 8</b></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="text" class="form-control"></td>
					<td> <input type="checkbox" class="form-control"></td>
				</tr>
				<tr>
					<th colspan="2">Curricular / Academic  Activities</th>
					<td colspan="10"><input type="text" class="form-control">
				</tr>
				<tr>
					<th colspan="2">Co-Curricular Activities</th>
					<td colspan="10"><input type="text" class="form-control"></td>
				</tr>
				<tr>
					<th colspan="2">Extra Curricular Activities</th>
					<td colspan="10"><input type="text" class="form-control"></td>
				</tr>
				<tr>
					<th colspan="2">Other Activities</th>
					<td colspan="10"><input type="text" class="form-control"></td>
				</tr>
				<tr>
					<td colspan="12">
						<input type="submit" name="submitacademic" value="UPDATE" class="btn btn-block btn-primary btn-sm" >
					</td>
				</tr>

			</table>

		</div>
	</div>

</div>

<?php 
		}
	}
mysqli_close($con);

include("footer.php");
?>
