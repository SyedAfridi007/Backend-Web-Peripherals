<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .content{
        width: 100%;
        height: 87vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color:indigo;
        font-size: 2rem;
        font-family: sans-serif;
    }
</style>
<body>
    <?php include("user_nav.php") ?>
    <div class="content">
      <h1>Welcome Your Account</h1>

     <?php
       session_start();
       echo $_SESSION["username"];
       
     ?>
    </div>
    <?php include("footer.php") ?>
    
</body>
</html>