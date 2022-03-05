<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "login";

session_start();

$data = mysqli_connect($host,$user,$password,$db);
if($data === false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username= $_POST["username"];
    $password= $_POST["password"];

    $sql = "select * from users where username = '".$username."' AND password = '".$password."'  ";
    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if($row["usertype"] == "user")
    {
        $_SESSION["username"] = $username;
        header("location:userhome.php");
    }
    else if($row["usertype"] == "admin")
    {
        $_SESSION["username"] = $username;
        header("location:adminhome.php");
    }
    else{
        echo " username or password incorrect";
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
<div class="login">
    <form action="#" method="post">
        <p>
            <label for="u">Username</label>
            <input type="text" name="username" placeholder="Username" id="u">
        </p>

        <p>
            <label for="p">Password</label>
            <input type="password" name="password" placeholder="Password" id="p">

        </p>

        <input type="submit" name="submit" value="Login">
    </form>
</div>
   
    
</body>
</html>
