<?php
	include"includes/connection.php";
	$user_id=$_SESSION['id'];
	$product_id=$_GET['id'];
	$query="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$product_id' AND status='Added to cart';";
	$result=mysqli_query($con,$query);
	echo "<script type='text/javascript'> window.location='product.php';</script>";
?>