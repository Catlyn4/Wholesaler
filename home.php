<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php	include_once("connection.php");
$result = mysqli_query($db, "Select sales.sales_id,SUM(sales_item.quantity * sales_item.price) as total,date,firstname from sales,sales_item,items WHERE sales.sales_id = sales_item.sales_id AND items.item_id = sales_item.item_id GROUP BY sales_item.sales_id");

<<<<<<< HEAD
=======
?>
>>>>>>> update button search

?>
<?php
	$sql1 = "SELECT * FROM customer";
	$query1 = mysqli_query($db,$sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	
</head>
<style>
.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  border-box: box-sizing;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: left;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: left;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
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
<<<<<<< HEAD
<<<<<<< HEAD
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employee</a>
=======
					<a class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employee</a>
>>>>>>> add salestable,itemtable,sales_item table
=======
					<a class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employee</a>
>>>>>>> update button search
					<div class="dropdown-menu">
					  <a class="dropdown-item" href="add.php">Add Employee</a>
					  <a class="dropdown-item" href="view.php">View Employee</a>
					</div>
				</li>&nbsp;&nbsp;&nbsp;
				<li class="nav-item dropdown">
<<<<<<< HEAD
<<<<<<< HEAD
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Customer</a>
=======
					<a class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Customer</a>
>>>>>>> add salestable,itemtable,sales_item table
=======
					<a class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Customer</a>
>>>>>>> update button search
						<div class="dropdown-menu">
						  <a class="dropdown-item" href="addcost.php">Add Customer</a>
						  <a class="dropdown-item" href="viewcost.php">View Customer</a>
						</div>
				</li>&nbsp;&nbsp;&nbsp;
				<li class="nav-item dropdown">
<<<<<<< HEAD
<<<<<<< HEAD
					<a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Item</a>
=======
					<a class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Item</a>
>>>>>>> add salestable,itemtable,sales_item table
=======
					<a class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Item</a>
>>>>>>> update button search
						<div class="dropdown-menu">
						  <a class="dropdown-item" href="additem.php">Add Item</a>
						  <a class="dropdown-item" href="viewitem.php">View Item</a>
						</div>
				</li>&nbsp;&nbsp;&nbsp;
					<li class="nav-item dropdown">
<<<<<<< HEAD
<<<<<<< HEAD
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salary</a>
=======
					<a class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salary</a>
>>>>>>> add salestable,itemtable,sales_item table
=======
					<a class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salary</a>
>>>>>>> update button search
						<div class="dropdown-menu">
						  <a class="dropdown-item" href="addsalary.php">Add Salary</a>
						  <a class="dropdown-item" href="viewsalary.php">View Salary</a>
						</div>
				</li>&nbsp;&nbsp;&nbsp;
				<li>
					<a class="btn btn-sm btn-outline-success" href="reports.php">Reports<span class="sr-only">(current)</span></a>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
			<div class="dropdown">
				<button onclick="myFunction()" class="form-control">ITEMS</button>
					<div id="myDropdown" class="dropdown-content">
						<input type="text" placeholder="Search.." id="myInput" onkeyup="loadproducts()">
					</div>
			</div>
			</div>
	<script>
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	function loadproducts() {
		var input, filter, ul, li, a, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		div = document.getElementById("myDropdown");
		a = div.getElementsByTagName("a");
		for (i = 0; i < a.length; i++) {
			txtValue = a[i].textContent || a[i].innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				a[i].style.display = "";
			} else {
				a[i].style.display = "none";
			}
		}
	}
	</script>
	</br>
		<div class="col-sm-2">
			<select name="id" id="customer"  placeholder="id" class="form-control" required>
			<option>Customer</option>
					<?php 
						$sql = "SELECT * FROM costumer";
						$result = mysqli_query($db,$sql);
						if(mysqli_num_rows($result)){
							while($row = mysqli_fetch_array($result)){
								?>
								<option value="<?php echo $row['id'];?>">
									<?php echo $row['id'] ." ".$row['firstname'] ." ".$row['lastname']?>
								</option>
								<?php
							}
						}
					?>
			</select>
		</div>
	</br>
		<div class="col-sm-2">
			<div class="form-control"<h1 id="total"> Total: 0.0</h1>
			
			</div>
		</div>
		</div>
	</div>
</div>
	</br>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
			<table class="table table-dark table-bordered table-hover">
				<tr bgcolor='green'>
					<td>Item_id</td>
					<td>Description</td>
					<td>Quantity</td>
					<td>Unit</td>
					<td>Price</td>
				</tr>
			<tbody>
			</table>
		</div>
		<div class="col-sm-4">
			<table class="table table-dark table-bordered table-hover">
				<tr bgcolor='green'>
					<td>Sales_ID</td>
					<td>Time_Stamp</td>
					<td>Cust_ID</td>
					<td>Emp_ID</td>
				</tr>
			<tbody>
			<?php
<<<<<<< HEAD
				$sel_query="Select sales.sales_id,SUM(sales_item.quantity * sales_item.price) as total,time_stamp,cust_id from sales,sales_item,item WHERE sales.sales_id = sales_item.sales_id AND item.id = sales_item.item_id GROUP BY sales_item.sales_id";
				$result = mysqli_query($db,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
				<tr><td align="center"><?php echo $row["sales_id"]; ?></td>
				<td align="center"><?php echo $row["total"]; ?></td>
				<td align="center"><?php echo $row["cust_id"]; ?></td>
				<td align="center"><?php echo $row["time_stamp"]; ?></td></tr>
			</tbody>
	<?php  } ?>
=======
			while($res = mysqli_fetch_array($result)) {		
				echo "<tr>";
				echo "<td>".$res['sales_id']."</td>";
				echo "<td>".$res['firstname']." ".$res['lastname']."</td> ";
				echo "<td>".$res['time_stamp']."</td>";
				echo "<td>".$res['total']."</td>";		
			}?></tbody>
>>>>>>> update button search
			
			</table>
		</div>
		<div class="col-sm-4">
			<table class="table table-dark table-bordered table-hover">
				<tr bgcolor='green'>	
					<td>Item_id</td>
					<td>Quantity</td>
					<td>Unit</td>
					<td>Price</td>
					<td>Total</td>
				</tr>
			<tbody>
			</table>
			<center><input name="submit" class="add" type="submit" value="Add" /> </center>
			</div>
		</div>

		<div class="footer">
			
		</div>
	</div>
</div>
	<script src="script.js"></script>
<br/>
</div>
</body>
</html>
