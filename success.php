<?php
require("includes/connection.php");
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
$user_id = $_SESSION['id'];
$item_ids_string = $_GET['itemsid'];
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Life Style Store</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		<?php include"includes/header.php"; ?>
		<div class="container" style="margin-top: 100px; margin-bottom:20%">
			<div class="jumbotron">
				<h3 style="text-align: center;"><b>Your order is confirmed. Thank you for shopping with us.</b></h3><hr>
				<h3 style="text-align: center;">Click <a href="product.php">here</a> to purchase another item</h3>
			</div>
			
		</div>
		<?php include"includes/footer.php"; ?>
	</body>
</html>