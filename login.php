<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log in</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	
</head>
<!--name of the business-->
<body style="background-image:url('img/onion.jpg');" width="100%" alt="Responsive image">
	<nav class="navbar navbar-expand-lg navbar-info bg-info">
		<img src="img/talongs.jpg" width="110" height="80" alt="img/talongs.jpg"/>&nbsp;&nbsp;&nbsp;
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<h2>DANNY'S WHOLESALER</h2>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</ul>
			</div>
	</nav>
	
	<!--log in form-->
<div class="container"><br/>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($db, $_POST['username']);
	$pass = mysqli_real_escape_string($db, $_POST['password']);


	if($user == "" || $pass == "") {
		echo "<br/>";
	} else {
		$result = mysqli_query($db, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			header('Location: login.php');
		}

		if(isset($_SESSION['valid'])) {
			header('Location: home.php');			
		}
	}
} else {
?>

<main class="bd-masthead" id="content" role="main">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-8 order-md-2 text-center text-md-left pr-md-2">
				<form name="form1" method="post" action=""><br/>
					<div class="jumbotron col-sm-5" style="background-color:skyblue">
						<h2><center>LOG IN</center></h2>
					<br/>
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
						</div></br>
						<button class="btn btn-outline-success" type="submit" name="submit" value="Submit" onClick="return confirm('Successfully Log In!')">Log in</button><br/><br/>
							<p>
								Don't have any account ? </br> <a class="btn btn-sm btn-outline-success" href="register.php" role="button">Sign up</a>
							</p>
					</div>
				</form>
			</div>
		</div>
	<?php
	}
	?>
	</div>
</body>
</html>
