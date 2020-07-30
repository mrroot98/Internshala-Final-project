<?php
	require "connection.php";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$city = $_POST['city'];
	$address=$_POST['address'];
	
	function check_account($con, $email) {
		$check_account_query="SELECT id FROM users where email='$email'";
		$ressult_check_account=mysqli_query($con,$check_account_query);
		$number_of_accounts=mysqli_num_rows($ressult_check_account);
		return $number_of_accounts;
	}
	$total_accounts=check_account($con,$email);

	if($total_accounts>0) { ?>
		<script type='text/javascript'>  
			alert("Email id alreay exists");
			window.location='../signup.php'; 
		</script>
		
	<?php }
	else {
		$sql = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address');";
		$result=mysqli_query($con, $sql) or die(mysqli_error($con));
		$_SESSION['email']=$email;
		$_SESSION['id']=mysqli_insert_id($con);
		echo "<script type='text/javascript'>  window.location='../index.php'; </script>";
	}

?>