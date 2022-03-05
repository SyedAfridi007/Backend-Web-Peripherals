<?php include('navbar.php');?>
 <h1>Home page</h1>
 <hr>

<?php
		
session_start();
	if(isset($_SESSION['postt'])){
		echo "<h3> Post: ". $_SESSION['postt']. "</h3>"; 
	echo"<br>";
	echo "Posted by ". $_SESSION['user']; 
	}
		

		

 ?>
 
 