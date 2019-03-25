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
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$middlename = $_POST['middlename'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];
	
	$result = mysqli_query($db, "UPDATE costumer SET  firstname='$firstname', lastname='$lastname',middlename='$middlename',phone_number='$phone_number',address='$address' WHERE id='$id'");
	if($result == true){
		header("Location: viewcost.php");
	}else{
		echo "Error".$id,$firstname,$lastname,$middlename,$phone_number,$address;
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($db, "SELECT * FROM costumer WHERE id='$id'");

while($res = mysqli_fetch_array($result))
{
	$id 		= $res['id'];
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$middlename = $res['middlename'];
	$phone_number = $res['phone_number'];
	$address = $res['address'];
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
			<a class="btn btn-sm btn-outline-dark" href="viewcost.php">Home <span class="sr-only">(current)</span></a>
		  </li>&nbsp;&nbsp;&nbsp;
		</ul>
	</div>
</nav>
	
<br/>
	<div class="container">
		<form name="form1" method="post" action="editcost.php">
		<input type="hidden" name="id" value="<?php echo $id;?>" />
		<div class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<div class="col-sm-6">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="viewcost.php">View Costumer</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit Costumer</li>
				</ol>
			</div>
		</nav>
	</div><br/>
		<div class="jumbotron col-sm-6" style="background-color:skyblue">
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Firstname:</h5></label>
					<div class="col-sm-8">
						<input type="text" name="firstname" value="<?php echo $firstname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Lastname:</h5></label>
					<div class="col-sm-8">
						<input type="text" name="lastname" value="<?php echo $lastname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Middlename:</h5></label>
					<div class="col-sm-8">
						<input type="text" name="middlename" value="<?php echo $middlename;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Phone_Number:</h5></label>
					<div class="col-sm-8">
						<input type="text" name="phone_number" value="<?php echo $phone_number;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Address:</h5></label>
					<div class="col-sm-8">
						<textarea  name="address" value="" class="form-control" id="colFormLabel"><?php echo $address;?> </textarea>
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
