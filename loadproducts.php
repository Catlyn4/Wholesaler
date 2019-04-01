<?php
	require('connection.php');
	if (isset($_POST['item'])){
<<<<<<< HEAD
<<<<<<< HEAD
		$name = mysqli_real_escape_string($connection,$_POST['item']);
		$show 	= "SELECT * FROM item WHERE description LIKE '$name%' ";
		$query 	= mysqli_query($connection,$show);
=======
		$name = mysqli_real_escape_string($db,$_POST['item']);
		$show 	= "SELECT * FROM item WHERE description LIKE '$name%' ";
		$query 	= mysqli_query($db,$show);
>>>>>>> update button search
=======
		$name = mysqli_real_escape_string($db,$_POST['item']);
		$show 	= "SELECT * FROM item WHERE description LIKE '$name%' ";
		$query 	= mysqli_query($db,$show);
>>>>>>> add main function
		if(mysqli_num_rows($query)>0){
			while($row = mysqli_fetch_array($query)){
				echo "<tr class='js-add' data-number=".$row['id']." data-description=".$row['description']." data-quantity=".$row['quantity']." data-unit=".$row['unit']." data-price=".$row['price']."><td>".$row['id']."</td><td>".$row['description']."</td>";
				echo "<td>".$row['quantity']."</td>";
				echo "<td>".$row['unit']."</td>";
				echo "<td>".$row['price']."</td>";
			}
		}
		else{
			echo "<td></td><td>No Products found!</td><td></td>";
		}
	}?>