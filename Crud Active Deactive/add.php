<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['course'];


    $insertQuery = "insert into courses(Course_name) values('$name')";
    $res = mysqli_query($con,$insertQuery);
    if($res){
        ?>
        <script>
            alert("data is Inserted");
        </script>
        <?php   
    }else{
        ?>
        <script>
            alert("data not Inserted")
        </script>
        <?php
    }     
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="rightSide">
            <h2 class="title">Add a New course</h2>
            <form method="POST" class="formContainer" action="" >
                <input type="text" name="course" placeholder="Enter your Name">
                <input type="submit" name="submit" value="Register" class="btnReg">

            </form>
        </div>
    
</body>
</html>