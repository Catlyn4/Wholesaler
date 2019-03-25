<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php

include_once("connection.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$price = $_POST['price'];
	
	
	$result = mysqli_query($db, "UPDATE item SET  id='$id', description='$description',quantity=$quantity,unit='$unit',price=$price WHERE id=$id");
			header("Location: viewitem.php");
		
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM item WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$id			= $res['id'];
	$description = $res['description'];
	$quantity = $res['quantity'];
	$unit = $res['unit'];
	$price= $res['price'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
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
			<a class="btn btn-sm btn-outline-dark" href="viewitem.php">Home <span class="sr-only">(current)</span></a>
		  </li>
		</ul>
	  </div>
	</nav>
<br/>
<!--Current page-->
<div class="container">
	<nav aria-label="breadcrumb" role="navigation">
		<div class="col-sm-4">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="viewitem.php">View Item</a></li>
				<li class="breadcrumb-item active" aria-current="page">Edit Item</li>
			</ol>
		</div>
	</nav>
	<!--Edit form page-->
<div class="jumbotron col-sm-4" style="background-color:skyblue">
	<form name="edititem" method="post" action="edititem.php">
	<input type="hidden" name="id" value="<?php echo $id;?>" />
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Description:</h5></label>
				<div class="col-sm-8">
					<textarea  name="description" value="" class="form-control" id="colFormLabel"><?php echo $description;?> </textarea>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Quantity:</h5></label>
				<div class="col-sm-8">
					<input type="text" name="quantity" value="<?php echo $quantity;?>" class="form-control" id="colFormLabel">
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Unit:</h5></label>
				<div class="col-sm-8">
					<select name="unit" class="form-control" id="colFormLabel">
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
					<input type="text" name="price" value="<?php echo $price;?>" class="form-control" id="colFormLabel">
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-4 col-form-label"></label>	
				<div class="col-sm-8">
						<button class="btn btn-outline-dark" type="submit" name="update" value="Update">Update</button>
				</div>
		</div>
	</form>
</div>
	</div>
</body>
</html>
