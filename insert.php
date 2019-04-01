<?php

include('connection.php');

if(isset($_POST['id'])){
	$id = $_POST['id'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$price = $_POST['price'];
<<<<<<< HEAD
	$costumer = $_POST['costumer'];
=======
	$costumer = $_POST['customer'];
>>>>>>> add main function
	$sales = array();
	
	
	$sql = "INSERT INTO sales(cust_id) VALUES($costumer)";
<<<<<<< HEAD
<<<<<<< HEAD
	$result = mysqli_query($connection,$sql);
=======
	$result = mysqli_query($db,$sql);
>>>>>>> update button search
=======
	$result = mysqli_query($db,$sql);
>>>>>>> add main function
	if($result == false){
		echo "Something Went Wrong!";
	}else{
	$sql1 = "SELECT sales_id from sales order by sales_id desc LIMIT 1";
<<<<<<< HEAD
<<<<<<< HEAD
	$result1 = mysqli_query($connection,$sql1);
=======
	$result1 = mysqli_query($db,$sql1);
>>>>>>> update button search
=======
	$result1 = mysqli_query($db,$sql1);
>>>>>>> add main function
	$row = mysqli_fetch_array($result1);
	
	for($i = 0; $i < count($_POST['id']); $i++){
		$sales[] = $row['sales_id'];
	}
	$num=0;
	while($num<count($_POST['id'])){
<<<<<<< HEAD
<<<<<<< HEAD
		$item_id1 = mysqli_real_escape_string($connection, $item_id[$num]);
		$quantity1 = mysqli_real_escape_string($connection, $quantity[$num]);
		$unit1 = mysqli_real_escape_string($connection, $unit[$num]);
		$price1 	= mysqli_real_escape_string($connection, $price[$num]);
		$sales1	= mysqli_real_escape_string($connection, $sales[$num]);
		
		$insert = "INSERT INTO sales_item(sales_id,item_id,quantity,unit,price) VALUES($sales1,$item_id1,$quantity1,'$unit1','$price1')";
		mysqli_query($connection, $insert);
=======
		$item_id1 = mysqli_real_escape_string($db, $item_id[$num]);
=======
		$item_id1 = mysqli_real_escape_string($db, $id[$num]);
>>>>>>> add main function
		$quantity1 = mysqli_real_escape_string($db, $quantity[$num]);
		$unit1 = mysqli_real_escape_string($db, $unit[$num]);
		$price1 	= mysqli_real_escape_string($db, $price[$num]);
		$sales1	= mysqli_real_escape_string($db, $sales[$num]);
		
		$insert = "INSERT INTO sales_item(sales_id,item_id,quantity,unit,price) VALUES($sales1,$item_id1,$quantity1,'$unit1','$price1')";
		mysqli_query($db, $insert);
<<<<<<< HEAD
>>>>>>> update button search
=======
>>>>>>> add main function
		$num++;
	}
	
	if($insert==true){
		echo "Success!";
	}	
}
}
?>