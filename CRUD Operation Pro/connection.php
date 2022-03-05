<?php

$server = 'localhost';
$username = 'root';
$password = "";
$db = 'message';

$con = mysqli_connect($server,$username, $password, $db);

if($con){
?>  
    <script>
        alert('Connection Successful')
    </script>
<?php    
}
else{
    echo 'No Connection';
    //die("No Connection" .mysqli_connect_error());
}

?>