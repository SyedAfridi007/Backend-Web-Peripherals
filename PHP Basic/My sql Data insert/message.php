<?php
include 'connection.php';

if(isset($_POST['sendBtn'])){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $texts = $_POST['texts'];
 

    $insertQuery = "insert into messages(name,email,subject,texts) values('$name','$email','$subject','$texts')";
    $res = mysqli_query($con,$insertQuery);
    if($res){
        ?>
        <script>
            alert("data is Inserted");
        </script>
        <?php   
    }else{
        ?>
        <script>
            alert("data not Inserted")
        </script>
        <?php
    }     
}



if(isset($_POST['subsBtn'])){
    $email = $_POST['email'];


    $insertQuery = "insert into news(email) values('$email')";
    $res = mysqli_query($con,$insertQuery);
    if($res){
        ?>
        <script>
            alert("data is Inserted");
        </script>
        <?php   
    }else{
        ?>
        <script>
            alert("data not Inserted")
        </script>
        <?php
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
    <link rel="stylesheet" href="style.css">
</head>
<body>


<section class="contact" id="contact">
    
      <div class="contact-row">

        <div class="contact-left-col">
          <h3>Get in touch</h3>
          <form class="message" method="post">
            <div class="contact-left-first-col">
              <input type="text" placeholder="Name" name="user">
              <input type="email" placeholder="Email" name="email">
            </div>
            <input type="text" placeholder="subject" name="subject">
            <textarea cols="30" rows="10" placeholder="write message" name="texts"></textarea>
            <input type="submit" name="sendBtn" value="Send Message" class="btn">
          </form>  
        </div>


        <div class="contact-right-col">
          <div class="contact-right-sub-row">
            <div class="address">
              <h3>address</h3>
              <li> <ion-icon class="icon" name="location-outline"></ion-icon>Dhaka Bangladesh</li>
              <li> <ion-icon class="icon" name="mail-outline"></ion-icon>gcexchange@gmail.com</li>
              <li> <ion-icon class="icon" name="call-outline"></ion-icon>+880 134864865845</li> 
            </div>
            <div class="social">
                <h3>follow us on</h3>
                <div class="social-links">
                  <li><a href="http://"><ion-icon name="logo-facebook"></ion-icon></a></li>
                 <li><a href="http://"><ion-icon name="logo-instagram"></ion-icon></a></li>
                 <li><a href="http://"><ion-icon name="logo-twitter"></ion-icon></a></li>
                 <li><a href="http://"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                 <li><a href="http://"><ion-icon name="logo-youtube"></ion-icon></a></li>
                </div>
                 
            </div>
            <form class="news" method="post">
              <h3>Subscribe us for Latest News</h3>
              <input type="email" name="email" placeholder="Enter email">
              <input type="submit" name="subsBtn" value="Subscribe" class="btn">
            </form>

          </div>
      
        </div>
      </div>
    </section>
 

    
</body>
</html>