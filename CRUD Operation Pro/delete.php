<?php 

include 'connection.php';

if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];

    $sql = "delete from courses where id = '$id'";
    $result=mysqli_query($con, $sql);

    if($result){
        ?>
        <script>
            alert("data is Deleted");
        </script>
        <?php  
        header('location:course-page.php');
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
