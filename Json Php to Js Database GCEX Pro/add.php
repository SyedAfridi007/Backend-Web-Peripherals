<?php
include 'connection.php';

if(isset($_POST['addBtn'])){
    $name = $_POST['cname'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];
 

    $insertQuery = "insert into currency(name,buy,sell) values('$name','$buy','$sell')";
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


<section class="contact" id="contact">
    
        <div class="contact-left-col">
          <h3>Add New Currency</h3>
          <form class="addCurrency" method="post">
              <input type="text" placeholder="Currency Name" name="cname">
              <input type="text" placeholder="Buy Prize" name="buy">
              <input type="text" placeholder="Sell Prize" name="sell">
            <input type="submit" name="addBtn" value="Add Currency" class="btn">
          </form>  
        </div>

    </section>

    <a class="" href="display.php">See Currency</a>

 

    
</body>
</html>