<?php 

include 'connection.php';

if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];

    $sql = "delete from candidate where id = '$id'";
    $result=mysqli_query($con, $sql);

    if($result){
        ?>
        <script>
            alert("data is Deleted");
        </script>
        <?php  
        header('location:display.php');
    }else{
        ?>
        <script>
            alert("data not Deleted")
        </script>
        <?php
        die(mysqli_error($con));
    }  
}

?>
