<?php
	require "includes/connection.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Lifestyle Store</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		<?php require "includes/header.php"; ?>
		
		<div id="banner_image">
			<div id="inner-banner-image">	
				<center>
					<div id="banner_content">
						<h1>We sell lifestyle.</h1>
						<p>Flat 40% OFF on premium brands </p>
						<br>
						<a  href="product.php" class="btn btn-danger">Shop Now</a>
					</div>
				</center>
			</div>
		</div>
		
		<div class="row text-center" id="item_list" style="padding:100px; padding-top:0px; padding-bottom:0px;">
			<div class="col-sm-4">
				<a href="product.php#camera">
					<div class="thumbnail">
						<img src="img/camera.jpg" alt="">
						<div class="caption" style="text-align: center">
							<h3>Cameras</h3>
							<p>Choose among the best available in the world.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-4">
				<a href="product.php#shirts">
					<div class="thumbnail">
						<img src="img/shirt.jpg" alt="">
						<div class="caption" style="text-align: center">
							<h3>Shirts</h3>
							<p>Choose among the best available in the world.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-4">
				<a href="product.php#watches">
					<div class="thumbnail">
						<img src="img/watch.jpg" alt="">
						<div class="caption" style="text-align: center">
							<h3>Watches</h3>
							<p>Choose among the best available in the world.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<?php
			require "includes/footer.php";
		?>
	</body>
</html>