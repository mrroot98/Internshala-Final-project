<?php
	require "connection.php";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$check_account_query="SELECT id,email,password FROM users where email='$email'";
	$ressult_check_account=mysqli_query($con,$check_account_query);
	$account=mysqli_fetch_array($ressult_check_account);
	if($account['email']==$email){
		if($account['password']==$password){
			$_SESSION['email']=$email;
			$_SESSION['id']=$account['id'];
			echo "<script type='text/javascript'>  window.location='../index.php'; </script>";
		}
		else { ?>
			<script type='text/javascript'>  
				alert("Enter correct Password");
				window.location='../login.php'; 
			</script>
		<?php }
	}
	else { ?>
		<script type='text/javascript'>  
				alert("Enter correct Email id");
				window.location='../login.php'; 
		</script>
	<?php }
?>