<?php
	require "connection.php";
	if (!isset($_SESSION['email'])) {
	    header('location: login.php');
	}
	$user_id=$_SESSION['id'];
	$old_pass=$_POST['old_password'];
	$new_pass=$_POST['new_password'];
	$re_pass=$_POST['repnew_password'];
	$query="SELECT password FROM users WHERE id='$user_id'";
	$result=mysqli_query($con,$query);
	$password=mysqli_fetch_array($result);
	if($old_pass==$password['password']){
		if($new_pass==$re_pass){
			$update_query="UPDATE users SET password='$new_pass' WHERE id='$user_id';";
			$run_query=mysqli_query($con,$update_query);
			echo "<script type='text/javascript'> window.location='../index.php'; </script>";
		}else{ ?>
			<script type='text/javascript'>  
				alert("New password and Re-type password didn't match");
				window.location='../settings.php'; 
			</script>
		<?php }
	}else{ ?>
		<script type='text/javascript'>  
				alert("Old password didn't match");
				window.location='../settings.php'; 
		</script>
	<?php }
?>