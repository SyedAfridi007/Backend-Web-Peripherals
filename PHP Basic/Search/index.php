<?php
$con = mysqli_connect("localhost", "root" , "" , "live_search");
$sql = "select * from searchperson";

if(isset($_POST['search'])){
   $searchKey = $_POST['text'];
   $sql = "SELECT * FROM searchperson WHERE name LIKE '%$searchKey%' OR age LIKE '%$searchKey%'  OR country LIKE '%$searchKey%'  OR occupation LIKE '%$searchKey%' ";
   $result = mysqli_query($con, $sql);

   if($row= mysqli_fetch_row($result) <= 0){
	   echo "No data Found";
   }

}
else{
   $sql = "select * from searchperson";
   $searchKey = "";
}

$result = mysqli_query($con, $sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">

				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="text"  class='form-control' placeholder="Search USer" value="<?php echo $searchKey ?>" > 
					</div>
					<div class="col-md-6 text-left">
						<input type="submit" name="search" class="btn" value="Search"></input>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Age</th>
                        <th>Country</th>
                        <th>Occupation</th>
					</tr>
                    <?php while($row = mysqli_fetch_object($result)){?>
					<tr>
						<td> <?php echo  $row->id ?> </td>
						<td> <?php echo  $row->name ?> </td>
						<td> <?php echo  $row->age ?> </td>
                        <td> <?php echo  $row->country ?> </td>
						<td> <?php echo  $row->occupation ?> </td>
					</tr>

                    <?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>