<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>View</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image:url('img/onion.jpg');" width="100%" alt="Responsive image">
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand">
		  <img src="img/talongs.jpg" width="40" height="40" alt="img/talongs.jpg"/>
		  <b>Danny's Wholesaler</b>
		  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		  <li class="nav-item active">
			<a class="btn btn-sm btn-outline-dark" href="home.php">Home <span class="sr-only">(current)</span></a>
		  </li>
		</ul>
	  </div>
	</nav>
<br/>
	<?php

include_once("connection.php");

if(isset($_POST['Submit'])) {
	
	$emp_id = $_POST['emp_id'];
	$salary = $_POST['salary'];
	$date = $_POST['date'];
	$remarks = $_POST['remarks'];
	
	
		
	$result = mysqli_query($db, "INSERT INTO salary(emp_id,salary,time_stamp,remarks) VALUES('$emp_id','$salary', CURRENT_TIMESTAMP,'$remarks')");
		header('location: viewsalary.php');
	} 
?>
<div class="container">
	<nav aria-label="breadcrumb" role="navigation">
		<div class="col-sm-4">
			<ol class="breadcrumb">
				
				<li class="breadcrumb-item"><a href="viewsalary.php">View Costumer</a></li>
				<li class="breadcrumb-item active" aria-current="page">Add Costumer</li>
			</ol>
		</div>
	</nav>
<div class="jumbotron col-sm-4" style="background-color:skyblue">
	<form action="addsalary.php" method="post" name="addsalary">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-5 col-form-label"><h5>Emp Id:</h5></label>
				<div class="col-sm-7">
					<select name="emp_id" class="form-control" id="colFormLabel">
					<?php 
						$sql = "SELECT * FROM employee";
						$result = mysqli_query($db,$sql);
						if(mysqli_num_rows($result)){
							while($row = mysqli_fetch_array($result)){
								?>
								<option value="<?php echo $row['id'];?>">
									<?php echo $row['id'] ." ".$row['firstname'] ." ".$row['lastname']?>
								</option>
								<?php
							}
						}
					?>
					</select>
				</div>
		</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-5 col-form-label"><h5>Salary:</h5></label>
					<div class="col-sm-7">
						<input type="number" name="salary" class="form-control" id="colFormLabel" required>
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-5 col-form-label"><h5>Remarks:</h5></label>
					<div class="col-sm-7">
						<input type="text" name="remarks" class="form-control" id="colFormLabel" required>
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-lg-5 col-form-label"></label>
					<div class="col-md-7">
						<button class="btn btn-outline-dark" type="submit" name="Submit" value="Add" onClick="return confirm('Salary Added')">Add</button>
					</div>
			</div>
	</form>
</div>
</div>
</body>
</html>
