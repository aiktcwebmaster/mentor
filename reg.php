<?php include("head.php"); ?>
<form class="form-group" action="verify.php" method="post">

<div class="container bg-info">
	<div class="row">
		<h2 class="bg-success text-center text-primary">AIKTC, SoET, New Panvel</h2>
		<h2 class="bg-primary text-center text-success">STUDENT SIGNUP</h2>

 	</div>

	<div class="row">
		<div class="col-md-6">
			<label>Name of Student</label>

			<input class="form-control" type="text" name="fullname" placeholder="FIRSTNAME MIDDLENAME LASTNAME">
		</div>

		<div class="col-md-2">

		<label>Roll No</label>
		<input class="form-control" type="text" name="rollno" >
		
		</div>
		<div class="col-md-2">

		<label>Year of Admission</label>
		<input class="form-control" type="text" name="yoa" placeholder="yyyy" >
		</div>

		<div class="col-md-2">

		<label>Date of Birth</label>
		<input class="form-control" type="text" name="dob" placeholder="yyyy-mm-dd">
		</div>

	</div>
<br/>
	<div class="row">
		
		<div class="col-md-2">

		<label>Contact No</label>
		<input class="form-control" type="text" name="phoneno" >
		</div>

		<div class="col-md-2">
			<label> Gender</label>
		<div class="radio">
		  <label><input type="radio" value="male" name="gender">Male</label>
		  <label><input type="radio" value="female" name="gender">Female</label>
		</div>
		</div>

		<div class="col-md-3">

		<label>Department</label>
			<select name="dept" class="form-control">
				<option value="Computer">Computer</option>
				<option value="Computer">Civil</option>
				<option value="Computer">Electrical</option>
				<option value="Computer">EXTC</option>
				<option value="Computer">Mechanical</option>
			</select>
		</div>
		<div class="col-md-2">

		<label class="radio-inline" >Regular
		<input class="form-control" value="Regular" type="radio" name="type"> </label>

		<label class="radio-inline" >Diploma
		<input class="form-control" type="radio" value="Diploma" name="type"> </label>

		</div>

		<div class="col-md-3">
			<label> Email ID</label>
			<input type="text" name="email" class="form-control">
		</div>
	</div>
<br/>
	<div class="row">
		<div class="col-md-12">
			<label> Residential Address</label>
			<input type="text" name="address" class="form-control">
		</div>
	</div>
	<br/>

	<div class="row">

			<div class="col-md-4">
			<label> Password</label>
			<input type="password" name="pwd" class="form-control">

		</div>
		<div class="col-md-4">
			<label>Re type Password</label>
			<input type="password" name="repwd" class="form-control">
			
		</div>


		<div class="col-md-4">
			<br/>
			<input type="submit" name="signupform" class="btn btn-primary"  value="Signup">	

		</div>
		<hr>
		<p class="text-center">

	</div>
<br/>
</div>
</form>
