<?php 
	include("head.php");
?>
<style>
	.bg
	{
		background-image: url('img/mentor-bg.jpg');
		background-repeat: no-repeat;
		background-attachment: top center;
		height: 622px;
		width: 1304px;
	}
</style>
<div class="bg ">
<div class="container">
	<div class="row"><br/><br/>
			<div class="col-md-3 bg-primary">
			

			<form action="verify.php" method="post" >
		<br>
		<div class="form-group">
			<label for="rollno"> Roll No </label>
			<input type="text" name="rollno" class="form-control">

			<label for="pwd" > Password </label>
			<input type="password" class="form-control" name="pwd">

			<br>
			<input class="btn btn-success" type="submit" name="loginform" value="Sign In">
			
			<label>Don't have an account, <a class="btn btn-info" href="reg.php
				">Sign Up</a> </label>
		</div>
		</form>		
		</div>
	</div>

</div>



