<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php	
include_once("connection.php");

$result = mysqli_query($db, "SELECT * FROM item WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Item</title>
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
				</ul>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
	</nav>
<br/>
<div class="container-fluid">
	<div class="row">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		<div class="col-sm-6">
=======
		<div class="col-sm-12">
>>>>>>> add salestable,itemtable,sales_item table
=======
		<div class="col-sm-12">
>>>>>>> update button search
=======
		<div class="col-sm-12">
>>>>>>> add main function
			<table class="table table-dark table-bordered table-hover">
				<tr bgcolor='green'>	
					<td>Description</td>
					<td>Quantity</td>
					<td>Unit</td>
					<td>Price</td>
					<td>Action</td>
				</tr>
			<?php
			while($res = mysqli_fetch_array($result)) {		
				echo "<tr>";
				echo "<td>".$res['description']."</td>";
				echo "<td>".$res['quantity']."</td>";
				echo "<td>".$res['unit']."</td>";
				echo "<td>".$res['price']."</td>";
				echo "<td><a href=\"edititem.php?id=$res[id]\">Edit</a> | <a href=\"deleteitem.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
			}
			?>
			<tbody>
			</table>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		</div>
		<div class="col-sm-6">
			<table class="table table-dark table-bordered table-hover">
				<tr bgcolor='green'>
					<td>Sales_ID</td>
					<td>Date</td>
					<td>Cust_ID</td>
					<td>Emp_ID</td>
					<td>Action</td>
				</tr>
			<?php
			while($res = mysqli_fetch_array($result)) {		
				echo "<tr>";
				echo "<td>".$res['sales_id']."</td>";
				echo "<td>".$res['date']."</td>";
				echo "<td>".$res['cust_id']."</td>";
				echo "<td>".$res['emp_id']."</td>";
				echo "<td><a href=\"edititem.php?id=$res[id]\">Edit</a> | <a href=\"deleteitem.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
			}
			?>
			<tbody>
			</table>
=======
>>>>>>> add salestable,itemtable,sales_item table
=======
>>>>>>> update button search
=======
>>>>>>> add main function
		</div>
	</div>
</div>

</body>
</html>
