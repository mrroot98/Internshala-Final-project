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
		
		<div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i></p>
                                <form role="form" action="includes/login_script.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required="">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<?php require "includes/footer.php";?>
	</body>
</html>