<?php
	if(isset($_POST['postt'])){
		$postt = $_POST['userp'];
		

		session_start();
		$_SESSION['postt'] = $postt;
		
		//echo "Hi ". $_SESSION['user'];
		header('location:home.php');// redirect to a page

	}
?>
 <?php include('navbar.php');?>
 <h1>Post page</h1>
 <hr>
 
 <form method="post" style="margin-left:350px ;">
 	<input type="text" name="userp" placeholder="Your Post">
 	<input type="submit" name="postt" value="Post Now">
 </form>

 
