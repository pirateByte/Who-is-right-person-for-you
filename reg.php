<?php
 	require 'database/dbconfig.php';


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #34495e">
	<div id="box">
		<center><h2>Registration</h2></center>
		<center><img src="img/logo-login.png" class="logo" align="center"></center>
		<form class="login-form" action="reg.php" method="post">
			<label><b>Username:</b></label></br>
			<input type="text" class="input-values" name="username" placeholder="Username" required=""></br>
			<label><b>Password:</b></label></br>
			<input type="password" class="input-values" name="password" placeholder="Password" required=""></br>
			<label><b>Confirm Password:</b></label></br>
			<input type="password" class="input-values" name="confirm-password" placeholder="Confirm password" required=""></br></br>
			<input name="submit-btn" type="submit" id="Sign-up" value="Register"></br>
			<a href="login.php"><input type="button" id="back_btn" value="Back"></a>
		</form>
		<?php 
			if (isset($_POST['submit-btn'])) {
				# code...
				#echo '<script type="text/javascript"> alert("Sign up button clicked") </script';
				$username = $_POST['username'];
				$password = $_POST['password'];
				$confirm = $_POST['confirm-password'];

				if($password ==$confirm){
					$query = "select * from userinfo where username = '$username'";
					$query_run = mysqli_query($con,$query);

					if(mysqli_num_rows($query_run)>0){

						echo "<script type='text/javascript'> alert('username already exist')</script>";
					}
					else{
						$query = "insert into userinfo values('$username','$password')";
						$query_run= mysqli_query($con,$query);

						if ($query_run) {
							
							echo "<script type='text/javascript'> alert('Registration compete! Go back to login')</script>";
						}
						else{
							echo "<script type='text/javascript'> alert('error in Registration')</script>";
						}
					}

				}
				else{
					echo "<script type='text/javascript'> alert('Password and Confirm Password doesn\'t match')</script>";
				}
			}


		 ?>
	</div>

</body>
</html>