<?php
	session_start();
	if(isset($_SESSION['user'])){
			header('location:profile.php');
		}
	if(isset($_POST['submit'])){
		$user = $_POST['user'];// save username to user variable 
		$pass = $_POST['pass'];// save password to pass variable 

		//session_start();
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;

		//echo "Hi ". $_SESSION['user'];
		header('location:profile.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Session</title>
</head>
<body>
	<?php include('navbar.php');?>
	<h1> Login Page</h1>
	<hr>
	<fieldset>
		<legend>Login Form</legend>
		<form method="post">
		<p><input type="text" name="user" placeholder="User name" required=""></p>
		<p><input type="password" name="pass" placeholder="Password" required=""></p>

		<input type="submit" name="submit" value="Login">
		
	</form>
	</fieldset>

</body>
</html>