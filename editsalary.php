<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
include_once("connection.php");
if (isset($_GET['salary_id'])) {
    
    $salary_id = $_GET['salary_id'];
    $get_contact = "SELECT * FROM salary WHERE salary_id = '$salary_id'";
    $get_salary = mysqli_query($db, "SELECT * FROM salary WHERE salary_id = '$salary_id'");
    $row = mysqli_fetch_array($get_salary);
}
if(isset($_POST['update'])){
      
      $salary_id = $_POST['salary_id'];
	  $remarks = $_POST['remarks'];
      
      $salary  = mysqli_real_escape_string($db, $_POST['salary']);
        // mysql query to Update data
     $query = "UPDATE salary SET salary='$salary',remarks='$remarks' WHERE salary_id = $salary_id";
     
     $result = mysqli_query($db, $query);
     
     if($result)
     {
         echo 'Data Updated';
     }else{
         echo 'Data Not Updated';
     }
      header('location: viewsalary.php?salary_id='.$row['salary_id'].'&updated=1'); 
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
</nav>
<br/>
	<div class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<div class="col-sm-4">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="viewsalary.php">View Employee</a></li>
					<li class="breadcrumb-item active" aria-current="page">Add Employee</li>
				</ol>
			</div>
		</nav>
<div class="jumbotron col-sm-4" style="background-color:skyblue">
	<form name="editsalary" method="post" action="editsalary.php">
		<input type="hidden" name="salary_id" value="<?php echo $salary_id;?>" />
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Salary:</h5></label>
					<div class="col-sm-7">
						<input type="number" name="salary" value="<?php echo $row['salary']; ?>" placeholder="Salary" class="form-control" id="colFormLabel"></div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-4 col-form-label"><h5>Remarks:</h5></label>
					<div class="col-sm-7">
						<input type="text" name="remarks" value="<?php echo $row['remarks']; ?>" placeholder="Remarks" class="form-control" id="colFormLabel"></div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-4 col-form-label"></label>	
					<div class="col-sm-7">
							<button class="btn btn-outline-dark" type="submit" name="update" value="Update">Update</button>
					</div>
			</div>
	</form>
</div>
	</div>
</body>
</html>
