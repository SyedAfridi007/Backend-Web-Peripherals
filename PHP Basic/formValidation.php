
<html>
    <head>
        <style>
            .error{
                color:red;
            }

        </style>
    </head>
<body>

<?php
$nameErr = $emailErr = $phoneErr = $websiteErr = $commentErr = $genderErr ="";
$name = $email = $phone = $website = $comment = $gender ="";

if( $_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["name"])){
        $nameErr = "Name is Requirrd";
    }
    else{
        $name = tInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
    }

    if(empty ($_POST["email"])){
        $emailErr = "Email is Required";
    }
    else{
        $email = tInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
    }

    if(empty($_POST["phone"])){
        $phoneErr = "Phone Number is Required";
    }
    else{
        $phone = ($_POST["phone"]);
    }

    if(empty($_POST["website"])){
        $websiteErr = " ";
    }
    else{
        $website = tInput($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
             $websiteErr = "Invalid URL";
             }
    }

    if(empty($_POST["comment"])){
        $commentErr = "Message can not be Blunk";
    }
    else{
        $comment = ($_POST["comment"]);  
    }

    if(empty($_POST["gender"])){
        $genderErr = "Gender can not be Blunk";
    }
    else{
        $gender = ($_POST["gender"]);  
    }
}

function tInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:<input type ="text" name="name" require>
<span class="error"> <?php echo $nameErr; ?> </span>
<br><br>
Email:<input type ="text" name="email" require>
<span class="error"> <?php echo $emailErr; ?> </span>
<br><br>
Phone:<input type ="text" name="phone" require>
<span class="error"> <?php echo $phoneErr; ?> </span>
<br><br>
Website:<input type ="text" name="website" require>
<span class="error"> <?php echo $websiteErr; ?> </span>
<br><br>
Comment:<textarea name="comment" id="comment" cols="18" rows="5"></textarea>
<span class="error"> <?php echo $commentErr; ?> </span>
<br><br>
Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
<span class="error"> <?php echo $genderErr; ?> </span>
<br><br>

<br>Agree to Teams of Service:<input type="checkbox" name="checkbox" id="check" require><br><br>

<br><input type ="submit" name="submit" value="submit">

</form>


Name: <?php echo $name; ?><br>
Email: <?php echo $email; ?><br>
Phone: <?php echo $phone; ?> <br>
Website: <?php echo $website; ?> <br>
Comment: <?php echo $comment; ?> <br>
Gender: <?php echo $gender; ?> <br>



</body>
</html>