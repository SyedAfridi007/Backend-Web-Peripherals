<?php
include 'connection.php';

$id = $_GET['updateId'];

$showquery = "select * from currency where id = '$id'";
$showdata = mysqli_query($con, $showquery);
$arr = mysqli_fetch_array($showdata);



if(isset($_POST['upBtn'])){
    $name = $_POST['cname'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];



    $sql = "update currency set id='$id', name='$name', buy='$buy', sell='$sell' where id= '$id'"; 
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
        <div class="rightSide">
            <h2 class="title">Update Currency Rate</h2>
            <form method="POST" class="formContainer" action="" >
                <input type="text" name="cname" value= "<?php echo $arr['name']; ?>" placeholder="Enter Currency Name">
                <input type="text" name="buy" value= "<?php echo $arr['buy']; ?>" placeholder="Enter Sell Prize">
                <input type="text" name="sell" value= "<?php echo $arr['sell']; ?>" placeholder="Enter Buy Prize">
                <input type="submit" name="upBtn" value="Update" class="btnReg">

            </form>
        </div>

    </div>
</body>
</html>
