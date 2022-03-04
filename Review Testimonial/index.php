<?php

$server = 'localhost';
$username = 'root';
$password = "";
$db = 'testimonial';

$con = mysqli_connect($server,$username, $password, $db);

$sql = "SELECT * FROM review ORDER BY id DESC LIMIT 5";

$result = mysqli_query($con, $sql);
$reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <section class="testimonial">
        <div class="testimonial-container">

            <div class="testimonial-inner">

        <?php foreach($reviews as $review): ?>

            <div class="reviewCard">
                <div class="img">
                  <img src="img/<?php echo $review['image']; ?>" width="80">
                </div>
                <div class="text">
                    <div class="innerText">
                        <h3 class="headingTitle"><?php echo $review['name'];?></h3>
                        <p><?php echo $review['message'];?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


            <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
            <a class="next" onclick='plusSlides(1)'>&#10095;</a>
        </div>
         <div style='text-align: center;'>
              <span class="dot" onclick='currentSlide(1)'></span>
              <span class="dot" onclick='currentSlide(2)'></span>
              <span class="dot" onclick='currentSlide(3)'></span>
              <span class="dot" onclick='currentSlide(4)'></span>
              <span class="dot" onclick='currentSlide(5)'></span>
          </div>
    </section>
    
    <script src="./script.js"></script>
</body>
</html>