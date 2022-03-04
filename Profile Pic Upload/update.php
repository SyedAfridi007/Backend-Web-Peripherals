<?php
$msg = "";
$css_class = "";

$conn = mysqli_connect('localhost','root','','img-upload');

$id = $_GET['updateId'];

$sql = "select * from users where id = '$id'";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);



if (isset($_POST['update-user'])){
    $bio = $_POST['bio'];
    $profileImage = time() . '-'.$_FILES['profileImage']['name'];

    $target = 'images/' . $profileImage;

    if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
        $sql = "UPDATE users set profile_image='$profileImage', bio='$bio' where id= '$id'"; 
        if(mysqli_query($conn , $sql)){
        $msg = "Data Upload Successfully";
        $css_class = "alert-success";
        header('Location:display.php');
       }else{
        $msg = "Failed to upload ";
        $css_class = "alert-danger";

       }

    }
    else{
        $msg = "Failed to upload ";
        $css_class = "alert-danger";
    };
    


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<style>
    #profileDisplay{
    display: block;
    width: 300px;
    margin: 1px auto;
    border-radius: 50%;
   }
</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-4 offset-md-4 form-div">
            <form  method="post" enctype="multipart/form-data">
            <h3 class="text-center">Update Profile</h3>
            <?php if(!empty($msg));?>
              <div class="alert <?php echo $css_class; ?>">
                 <?php echo $msg; ?>
               </div>
               <div class="form-group text-center image">
                   <img src="./placeholder.png" onclick="triggerClick()" id="profileDisplay" alt="">
                    <label for="profileImage">Profile Image</label>
                    <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display: none;">
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea type="text"  name="bio" id="bio" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block form-control mt-2" type="submit" name="update-user">Save Profile</button>
                </div>
            </form>
        </div>
    </div>
    
</div>

<script src="./script.js"></script>
    
</body>
</html>