<?php
 session_start();
 require 'database/dbconfig.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #2C3A47 ">

	<div id = "box">
		<center><h2"><b>LOGIN</h2></b></center>
		<center><img src="img/logo-login.png" class="logo" align="center"></center>
		<form class="login-form" action="login.php" method="post">
			<label><b>Username:</b></label></br>
			<input type="text" class="input-values" name="username" placeholder="Username"></br>
			<label><b>Password:</b></label></br>
			<input type="password" class="input-values" name="password" placeholder="Password"></br></br>
			<input type="submit" name="login" id="login-btn" value="Login"></br>
			<a href="reg.php"><input type="button" id="reg-btn" value="Register"></a>
		</form>

		<?php
		 if (isset($_POST['login'])) {
		 	$username = $_POST['username'];
		 	$password = $_POST['password'];

		 	$query= "Select * from userinfo where username = '$username' and password = '$password'";

		 	$query_run= mysqli_query($con,$query);


		 	if (mysqli_num_rows($query_run)>0) {
		 		$_SESSION['score'] = 0;
		 		$_SESSION['username'] =$username;
		 		header('location:que.php');
		 	}
		 	else{

		 		echo '<script type="text/javascript"> alert("Invalid Username or Password")</script> ';
		 	}
		 }

		  ?>

	</div>
	

</body>
</html>