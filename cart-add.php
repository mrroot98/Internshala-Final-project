<?php
	include "includes/connection.php";
	$item_id=$_GET['id'];
	$user_id=$_SESSION['id'];
	$add_order_query= "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart');";
	$order_query=mysqli_query($con,$add_order_query) or die(mysqli_error($con));
	echo "<script type='text/javascript'>  window.location='product.php'; </script>";
?>