<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php	
include_once("connection.php");

$result = mysqli_query($db, "SELECT * FROM employee WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
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
	<nav class="navbar navbar-expand-lg navbar-info">
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
		  </li>&nbsp;&nbsp;&nbsp;
		  <li class="nav-item">
			<a class="btn btn-sm btn-outline-dark" href="add.php">Add</a>
		  </li>
		</ul>
	</div>
</nav>
<div class="container">
		<table class="table table-dark table-bordered table-hover">
			<tr bgcolor='green'>
			<center><h2>Employee List</h2></center><br/>
				<td>Emp Id</td>
				<td>Firstname</td>
				<td>Lastname</td>
				<td>Middlename</td>
				<td>Action</td>
			</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['firstname']."</td>";
			echo "<td>".$res['lastname']."</td>";
			echo "<td>".$res['middlename']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
		<tbody>
		</table>
</div>
</body>
</html>
