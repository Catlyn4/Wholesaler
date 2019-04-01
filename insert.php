<?php

include('connection.php');

if(isset($_POST['id'])){
	$id = $_POST['id'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$price = $_POST['price'];
	$costumer = $_POST['costumer'];
	$sales = array();
	
	
	$sql = "INSERT INTO sales(cust_id) VALUES($costumer)";
	$result = mysqli_query($connection,$sql);
	if($result == false){
		echo "Something Went Wrong!";
	}else{
	$sql1 = "SELECT sales_id from sales order by sales_id desc LIMIT 1";
	$result1 = mysqli_query($connection,$sql1);
	$row = mysqli_fetch_array($result1);
	
	for($i = 0; $i < count($_POST['id']); $i++){
		$sales[] = $row['sales_id'];
	}
	$num=0;
	while($num<count($_POST['id'])){
		$item_id1 = mysqli_real_escape_string($connection, $item_id[$num]);
		$quantity1 = mysqli_real_escape_string($connection, $quantity[$num]);
		$unit1 = mysqli_real_escape_string($connection, $unit[$num]);
		$price1 	= mysqli_real_escape_string($connection, $price[$num]);
		$sales1	= mysqli_real_escape_string($connection, $sales[$num]);
		
		$insert = "INSERT INTO sales_item(sales_id,item_id,quantity,unit,price) VALUES($sales1,$item_id1,$quantity1,'$unit1','$price1')";
		mysqli_query($connection, $insert);
		$num++;
	}
	
	if($insert==true){
		echo "Success!";
	}	
}
}
?>