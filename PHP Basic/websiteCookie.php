<?php
$cookie_name = "user";
$cookie_value = $_SERVER['REMOTE_ADDR'];

setcookie($cookie_name, $cookie_value, time()+(60*60*24*30),"/");
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo"COOKIE NAME" .$cookie_name. " is not set!";
        }
        else{
            echo "Cookie " .$cookie_name. "is set <br>";
            echo "USER IP" .$_COOKIE[$cookie_name]."<br>";
            echo 'User Access time - '.fileatime("cookie.php");
        }
        ?>
    </body>
</html>