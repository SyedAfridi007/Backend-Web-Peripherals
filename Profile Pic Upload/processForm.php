<?php
$msg = "";
$css_class = "";


$conn = mysqli_connect('localhost','root','','img-upload');

if (isset($_POST['save-user'])){
    $bio = $_POST['bio'];
    $profileImage = time() . '-'.$_FILES['profileImage']['name'];

    $target = 'images/' . $profileImage;

    if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
       $sql = "INSERT INTO users (profile_image,bio) VALUES ('$profileImage','$bio')";
       if(mysqli_query($conn , $sql)){
        $msg = "Upload Successfully";
        $css_class = "alert-success";
       }else{
        $msg = "Failed to upload ";
        $css_class = "alert-danger";

       }

    }else{
        $msg = "Failed to upload ";
        $css_class = "alert-danger";
    };


}

