<?php
include 'processForm.php';

$id = $_GET['viewId'];

$sql = "SELECT * FROM users where id = '$id'";

$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    *{
        margin: 0;
        padding: 0;

    }
    .container{
        width: 100%;
        height: 100vh;
        background-color: indianred;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }

    img{
        width: 300px;
        border-radius: 10%;
    }
</style>

<body>

<div class="container">
    <div class="row">
        <?php foreach($users as $user): ?>
                <img src="images/<?php echo $user['profile_image']; ?>" width="80">
                <h1><?php echo $user['bio'];?></h1> 
        <?php endforeach; ?>      
    </div>
</div>
    
</body>
</html>