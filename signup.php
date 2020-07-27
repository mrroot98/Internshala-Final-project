<?php require "includes/connection.php";?>

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
		<?php require "includes/header.php";?>
		
		<div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form action="includes/signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Contact" maxlength="10" size="10" name="contact" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name="address" required="">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
		<?php require "includes/footer.php";?>
	</body>
</html>