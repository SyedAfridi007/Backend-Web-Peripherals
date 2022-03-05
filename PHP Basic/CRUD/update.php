<?php
include 'connection.php';

$id = $_GET['updateId'];

$showquery = "select * from candidate where id = '$id'";
$showdata = mysqli_query($con, $showquery);
$arr = mysqli_fetch_array($showdata);


if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $degree = $_POST['degree'];
    $refer = $_POST['refer'];
    $jobpost = $_POST['jobpost'];


    $sql = "update candidate set id='$id', name='$name', email='$email', phone='$phone', degree='$degree', refer='$refer', jobpost='$jobpost' where id= '$id'"; 
    $result=mysqli_query($con, $sql);
    if($result){
        ?>
        <script>
            alert("data is Updated");
        </script>
        <?php  
        header('location:display.php');
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="leftSide">
            <div class="image">
                <img src="./img/undraw_joyride_re_968t.svg" alt="">
            </div>
            <div class="wc">
                <h1>Welcome</h1>
                <p>Please fill all the details carefully.
                this form can change your life</p>
                <a href="display.php" class="btnCheck">Check Form</a>
            </div>
        </div>

        <div class="rightSide">
            <h2 class="title">Apply for Web Developer</h2>
            <form method="POST" class="formContainer" action="" >
                <input type="text" name="user" value= "<?php echo $arr['name']; ?>" placeholder="Enter your Name">
                <input type="email" name="email" value= "<?php echo $arr['email']; ?>" placeholder="Enter your Email">
                <input type="number" name="phone" value= "<?php echo $arr['phone']; ?>" placeholder="Enter Phone Number">
                <input type="text" name="degree" value= "<?php echo $arr['degree']; ?>" placeholder="Enter Qualification">
                <input type="text" name="refer" value= "<?php echo $arr['refer']; ?>" placeholder="If any Reference">
                <input type="text" name="jobpost" value="WEB DEVELOPER">
                <input type="submit" name="submit" value="Update" class="btnReg">

            </form>
        </div>

    </div>
</body>
</html>
