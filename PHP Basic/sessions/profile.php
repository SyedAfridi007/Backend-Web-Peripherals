<?php include('navbar.php');?>
<h1>Profile page</h1>
<hr>
<?php
	session_start();
	if(isset($_SESSION['user'])){
		echo "User Name: ". $_SESSION['user']; 
	echo"<br>";
	echo "User Password: ". $_SESSION['pass']; 
	}
?>