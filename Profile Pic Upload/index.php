<?php
include 'processForm.php'

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
    height: 100%;
    margin: 1px auto;
    border-radius: 50%;
   }
</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-4 offset-md-4 form-div">
            <form action="index.php" method="post" enctype="multipart/form-data">
            <h3 class="text-center">Create Profile Image</h3>
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
                    <textarea type="text" name="bio" id="bio" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block form-control mt-2" type="submit" name="save-user">Save Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="./script.js"></script>
    
</body>
</html>