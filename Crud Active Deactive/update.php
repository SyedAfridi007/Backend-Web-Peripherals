<?php
include 'connection.php';

$id = $_GET['updateId'];

$showquery = "select * from courses where id = '$id'";
$showdata = mysqli_query($con, $showquery);
$arr = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
    $name = $_POST['course'];


    $sql = "update courses set id='$id', Course_name='$name' where id= '$id'"; 
    $result=mysqli_query($con, $sql);
    if($result){
        ?>
        <script>
            alert("data is Updated");
        </script>
        <?php  
        header('location:course-page.php');
    }else{
        ?>
        <script>
            alert("data not Updated")
        </script>
        <?php
        die(mysqli_error($con));
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
                <input type="text" name="course" value= "<?php echo $arr['Course_name']; ?>"  placeholder="Enter your Name">
                <input type="submit" name="submit" value="Register" class="btnReg">

            </form>
        </div>
    
</body>
</html>