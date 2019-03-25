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
			<a class="btn btn-sm btn-outline-dark" href="view.php">Home <span class="sr-only">(current)</span></a>
		  </li>
		</ul>
	  </div>
	</nav>
<br/>
	<?php

include_once("connection.php");

if(isset($_POST['Submit'])) {	
	
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$middlename = $_POST['middlename'];
	$loginId = $_SESSION['id'];
	
		
	$result = mysqli_query($db, "INSERT INTO employee(firstname, lastname,middlename,login_id) VALUES('$firstname', '$lastname','$middlename', '$loginId')");
		header('location: view.php');
	} 
?>
<div class="container">
	<nav aria-label="breadcrumb" role="navigation">
		<div class="col-sm-5">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="viewcost.php">View Employee</a></li>
				<li class="breadcrumb-item active" aria-current="page">Add Employee</li>
			</ol>
		</div>
	</nav>
<<<<<<< HEAD
<div class="jumbotron col-sm-4" style="background-color:skyblue">
=======
<div class="jumbotron col-sm-5" style="background-color:skyblue">
>>>>>>> added table  to the item
	<form action="add.php" method="post" name="form1">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Firstname:</h5></label>
				<div class="col-sm-8">
					<input type="text" name="firstname" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Lastname:</h5></label>
				<div class="col-sm-8">
					<input type="text" name="lastname" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Middlename:</h5></label>
				<div class="col-sm-8">
					<input type="text" name="middlename" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-lg-4 col-form-label"></label>
				<div class="col-md-8">
					<button class="btn btn-outline-dark" type="submit" name="Submit" value="Add" onClick="return confirm('Added Successfully!')">Add</button>
				</div>
		</div>
	</form>
</div>
</div>
</body>
</html>
