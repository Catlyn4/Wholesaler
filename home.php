<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php	
include_once("connection.php");

$result = mysqli_query($db, "SELECT * FROM salary WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image:url('img/onion.jpg');" width="100%" alt="Responsive image">
	<nav class="navbar navbar-expand-lg navbar-success">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="navbar-brand">
					  <img src="img/talongs.jpg" width="40" height="40" alt="img/talongs.jpg"/>
					   <b>Danny's Wholesaler</b>
					</a>
				</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employee</a>
					<div class="dropdown-menu">
					  <a class="dropdown-item" href="add.php">Add Employee</a>
					  <a class="dropdown-item" href="view.php">View Employee</a>
					</div>
				</li>&nbsp;&nbsp;&nbsp;
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Customer</a>
						<div class="dropdown-menu">
						  <a class="dropdown-item" href="addcost.php">Add Customer</a>
						  <a class="dropdown-item" href="viewcost.php">View Customer</a>
						</div>
				</li>&nbsp;&nbsp;&nbsp;
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Item</a>
						<div class="dropdown-menu">
						  <a class="dropdown-item" href="additem.php">Add Item</a>
						  <a class="dropdown-item" href="viewitem.php">View Item</a>
						</div>
				</li>&nbsp;&nbsp;&nbsp;
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salary</a>
						<div class="dropdown-menu">
						  <a class="dropdown-item" href="addsalary.php">Add Salary</a>
						  <a class="dropdown-item" href="viewsalary.php">View Salary</a>
						</div>
				</li>&nbsp;&nbsp;&nbsp;
				<li>
					<a class="btn btn-sm btn-outline-dark" href="viewreports.php">Reports<span class="sr-only">(current)</span></a>
				</li>&nbsp;&nbsp;&nbsp;
			</ul>
			<form class="form-inline my-2 my-lg-0">		
				<ul class="nav nav-pills">
					<li class="nav-item dropdown">
						<a class="btn btn-sm btn-outline-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							My Profile
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="logout.php">logout</a>
							<a class="dropdown-item" href="changepassword.php">changepassword</a>
						</div>
					</li>			
				</ul>
			</form>
		</div>
	</nav>
<br/>
</div>
</body>
</html>
