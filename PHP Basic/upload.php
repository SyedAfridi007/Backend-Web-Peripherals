<?php
if(isset($_POST['submit'])){
    $file1name = $_FILES['file1']['name'];
    $file1type = $_FILES['file1']['type'];
    $file1size = $_FILES['file1']['size'];
    $file1tmpLoc = $_FILES['file1']['tmp_name'];
    $file1targetLoc = "photos/";

    // echo $file1name;
    // echo $file1type;
    // echo $file1size;
    // echo $file1tempLoc;

   

    if(!empty($file1name)){
        if(($file1type == 'image/jpeg' || $file1type == 'image/png') && $file1size < 2291456){
                move_uploaded_file($file1tmpLoc, $file1targetLoc.$file1name);
                echo "successfully uploded";
            }     
        else{
            echo "Upload Faild Select jpeg or PNG file and the file must be less than 2 MB";
        }
    }

    else{
        echo "select a file";
    }
}

?>
<form action="upload.php" method="post" enctype="multipart/form-data">
   <p> <input type="file" name="file1"> </p>
   <p> <input type="submit" name="submit" value="Upload"></p>
</form>