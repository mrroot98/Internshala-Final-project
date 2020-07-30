<?php
	function check_if_added_to_cart($item_id){
		include "connection.php";
		$user_id=$_SESSION['id'];
		$check_cart_query="SELECT * FROM users_items WHERE user_id='$user_id' AND item_id='$item_id' AND status='Added to cart';";
		$result_check_cart_query=mysqli_query($con,$check_cart_query);
		$num_of_orders=mysqli_num_rows($result_check_cart_query);
		if($num_of_orders>=1){
			return 1;
		}else{
			return 0;
		}
	}
?>