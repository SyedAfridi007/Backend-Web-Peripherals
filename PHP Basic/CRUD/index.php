<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $degree = $_POST['degree'];
    $refer = $_POST['refer'];
    $jobpost = $_POST['jobpost'];

    $insertQuery = "insert into candidate(name,email,phone,degree,refer,jobpost) values('$name','$email','$phone','$degree','$refer','$jobpost')";
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
            </div>
        </div>

        <div class="rightSide">
            <h2 class="title">Apply for Web Developer</h2>
            <form method="POST" class="formContainer" action="" >
                <input type="text" name="user" placeholder="Enter your Name">
                <input type="email" name="email" placeholder="Enter your Email">
                <input type="number" name="phone" placeholder="Enter Phone Number">
                <input type="text" name="degree" placeholder="Enter Qualification">
                <input type="text" name="refer" placeholder="If any Reference">
                <input type="text" name="jobpost" value="WEB DEVELOPER">
                <input type="submit" name="submit" value="Register" class="btnReg">

            </form>
        </div>

    </div>
</body>
</html>
