<?php 
	session_start();

		include("navbar.php");
		include("connection.php");

		$rollno = $_SESSION['loginuser'];
		
 ?>

<div class="jumbotron text-center">
  <h1>Welcome <?php echo $_SESSION['loginuser']; ?></h1>
  <p>Department of Computer Engineering</p> 
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			
		</div>

		<div class="col-sm-3">
		
		</div>

		<div class="col-sm-3">
			
		
			
		</div>

		<div class="col-sm-3">
			
			
		</div>



	</div>
</div>