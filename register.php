<!DOCTYPE html>
<html lang="en">
<head>
	<title>phonebook</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image:url('img/onion.jpg');" width="100%" alt="Responsive image">
	<nav class="navbar navbar-expand-lg navbar-info bg-info">
		<img src="img/talongs.jpg" width="110" height="90" alt="img/talongs.jpg"/>&nbsp;&nbsp;&nbsp;
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="header">
					<center><h2>DANNY'S WHOLESALER</h2></center>
				</div>
			</div>
	</nav>
<div class="container text-center">
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$db = mysqli_connect('localhost','root','','wholesaler');

	if($user == "" || $pass == "" || $firstname == "" || $lastname == "" || $email == "") {
		echo "<br/>";
	} else {
		mysqli_query($db, "INSERT INTO login(firstname, lastname, email, username, password) VALUES('$firstname', '$lastname', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		header('location: login.php');
	}
} else {
?>
<main class="bd-masthead" id="content" role="main">
	<form name="register" method="post" action="register.php"><br/>
		<div class="jumbotron col-sm-4" style="background-color:skyblue">
			<h3>
				<center>
					REGISTER
				</center>
			</h3>
			<br/>
				<div class="row">
					<div class="col-sm-12">
						<label for="validationServer01">First name</label>
							<input type="text" name="firstname" class="form-control is-valid" id="validationServer01"  required>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="validationServer01">Last name</label>
							<input type="text" name="lastname" class="form-control is-valid" id="validationServer01"  required>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="validationServer01">Email</label>
							<input type="text" name="email" class="form-control is-valid" id="validationServer01"  required>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="validationServer01">Username</label>
							<input type="text" name="username" class="form-control is-valid" id="validationServer01"  required>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="validationServer01">Password</label>
							<input type="password" name="password" class="form-control is-valid" id="validationServer01"  required>
					</div>
				</div><br/>
				<button class="btn btn-outline-success" type="submit" name="submit" value="Submit">Register</button>
					<p>
						<h5>Already have an account ?</h5> &nbsp;&nbsp;&nbsp; <a class="btn btn-md btn-outline-success" href="login.php" role="button">Log in</a>
					</p>
						</form>
					</div>
				</div>
</div>
</body>
</html>
