<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Item</title>
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
		  </li>&nbsp;&nbsp;&nbsp;
		</ul>
	  </div>
	</nav>
	<?php

	include_once("connection.php");

	if(isset($_POST['Submit'])) {	
		
		$description = $_POST['description'];
		$quantity = $_POST['quantity'];
		$unit = $_POST['unit'];
		$price = $_POST['price'];
		$loginId = $_SESSION['id'];
		
			
		$result = mysqli_query($db, "INSERT INTO item(description,quantity,unit,price,login_id) VALUES('$description','$quantity','$unit', '$price','$loginId')");
			header('location: viewitem.php');
		} 
	?>
<br/>
<div class="container">
	<nav aria-label="breadcrumb" role="navigation">
		<div class="col-sm-4 col-form-label">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="viewitem.php">View Item</a></li>
			</ol>
		</div>
	</nav>
<div class="jumbotron col-sm-4" style="background-color:skyblue">
	<form action="additem.php" method="post" name="additem">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Description:</h5></label>
				<div class="col-sm-8">
					<textarea type="text" name="description" class="form-control" id="colFormLabel" required></textarea>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Quantity:</h5></label>
				<div class="col-sm-8">
					<input type="text" name="quantity" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Unit:</h5></label>
				<div class="col-sm-8">
					<select name="unit"class="form-control" id="colFormLabel" >
				<?php 
					$sql = "SELECT * FROM unit";
					$result = mysqli_query($db,$sql);
					if(mysqli_num_rows($result)){
						while($row = mysqli_fetch_array($result)){
							?>
							<option value="<?php echo $row['unit'];?>"><?php echo $row['unit']?></option>
							<?php
						}
					}
				?>
				
				</select>
					
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Price:</h5></label>
				<div class="col-sm-8">
					<input type="text" name="price" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-lg-4 col-form-label"></label>
				<div class="col-md-8">
					<button class="btn btn-outline-dark" type="submit" name="Submit" value="Add">Add</button>
				</div>
		</div>
	</form>
</div>
</body>
</html>
