<?php include 'connection.php';?>

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
  
       <form class="container" action="" method="POST">
          <h1 class="title">Exchange your Currency</h1>
          <div class="card">
              <div class="card-body">
                  <div class="input">
                      <input type="text" name="amount" id="amount" placeholder="Enter Amount" required>
                  </div>
                  
                  <div class="input">
                      <div class="custom-select" style="width:200px;">
                          <select id="buy" name="buy" required>
                            <option value="0">Select Buy Currency</option>
                            <option value="usd">USD</option>
                            <option value="pound">Pound</option>
                            <option value="euro">Euro</option>
                            <option value="yuan">Yuan</option>
                            <option value="riyal">Saudi Riyal</option>
                            <option value="dinar">Kuwaiti dinar</option>
                            <option value="rupee">Indian Rupee</option>
                            <option value="ringgit">Ringgit</option>
                            <option value="taka">Taka</option>
  
                          </select>
                        </div>
                  </div>
  
                  <div class="input">
                      <div class="custom-select" style="width:200px;">
                          <select id="sell" name="sell" required>
                            <option value="0">Select Sell Currency</option>
                            <option value="usd">USD</option>
                            <option value="pound">Pound</option>
                            <option value="euro">Euro</option>
                            <option value="yuan">Yuan</option>
                            <option value="riyal">Saudi Riyal</option>
                            <option value="dinar">Kuwaiti dinar</option>
                            <option value="rupee">Indian Rupee</option>
                            <option value="ringgit">Ringgit</option>
                            <option value="taka">Taka</option>
                          </select>
                        </div>
                  </div>
  
  
                  <div class="input">
                      <input type="text" name="name" id="name"  placeholder="Enter Full name" required>
                      
                  </div>
                  <div class="input">
                      <input type="email" name="email" id="email"  placeholder="Enter Email" required > 
                  </div>
                  <div class="input">
                      <input type="text" name="passport" id="passport" placeholder="Enter Passport Number" required>
                      
                  </div>
                  <div class="input">
                      <input type="text" name="accno" id="accno"  placeholder="Enter Account Number" required>
                  </div>
                  <div class="input">
                      <input type="password" name="password" id="password"  placeholder="Enter Password" required>
                  </div>
              </div>
          </div>
          <input type="submit" name="submit" class="btn" value="Submit">
      </form>
  

<!--DATA BASE----->

<?php



$selectQuery="Select * from currency where name = 'usd'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();
$usdArray[1] = array();
$usdArray[1]['name'] = $row['name'];
$usdArray[1]['buy'] = $row['buy'];
$usdArray[1]['sell'] = $row['sell'];





$selectQuery="Select * from currency where name = 'pound'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();
$poundArray[2] = array();
$poundArray[2]['name'] = $row['name'];
$poundArray[2]['buy'] = $row['buy'];
$poundArray[2]['sell'] = $row['sell'];





$selectQuery="Select * from currency where name = 'euro'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();
$euroArray[3] = array();
$euroArray[3]['name'] = $row['name'];
$euroArray[3]['buy'] = $row['buy'];
$euroArray[3]['sell'] = $row['sell'];





$selectQuery="Select * from currency where name = 'yuan'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();
$yuanArray[4] = array();
$yuanArray[4]['name'] = $row['name'];
$yuanArray[4]['buy'] = $row['buy'];
$yuanArray[4]['sell'] = $row['sell'];





$selectQuery="Select * from currency where name = 'riyal'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();
$riyalArray[5] = array();
$riyalArray[5]['name'] = $row['name'];
$riyalArray[5]['buy'] = $row['buy'];
$riyalArray[5]['sell'] = $row['sell'];




$selectQuery="Select * from currency where name = 'dinar'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();
$dinarArray[6] = array();
$dinarArray[6]['name'] = $row['name'];
$dinarArray[6]['buy'] = $row['buy'];
$dinarArray[6]['sell'] = $row['sell'];




$selectQuery="Select * from currency where name = 'indian rupee'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();
$rupeeArray[7] = array();
$rupeeArray[7]['name'] = $row['name'];
$rupeeArray[7]['buy'] = $row['buy'];
$rupeeArray[7]['sell'] = $row['sell'];




$selectQuery="Select * from currency where name = 'ringgit'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();
$ringgitArray[8] = array();
$ringgitArray[8]['name'] = $row['name'];
$ringgitArray[8]['buy'] = $row['buy'];
$ringgitArray[8]['sell'] = $row['sell'];


$selectQuery="Select * from inventory where cname = 'usd'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$tusdArray = array();
$tusdArray[1] = array();
$tusdArray[1]['cname'] = $row['cname'];
$tusdArray[1]['tamount'] = $row['tamount'];



$selectQuery="Select * from inventory where cname = 'pound'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$tpoundArray = array();
$tpoundArray[1] = array();
$tpoundArray[1]['cname'] = $row['cname'];
$tpoundArray[1]['tamount'] = $row['tamount'];


?>

<?php
if(isset($_POST['submit'])){
    $bamount = $_POST['amount'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $passport = $_POST['passport'];
    $accno = $_POST['accno'];
    $password = $_POST['password'];


    
if($_POST['buy']='usd' && $_POST['sell'] = 'pound'){
    $buyAmount = $usdArray[1]['buy'] * $bamount;
    $totalAmount = round($buyAmount/ $poundArray[2]['sell']);
    $in = $tusdArray[1]['tamount'] - $bamount;
    $out = $tpoundArray[1]['tamount'] + $totalAmount;


    $sql = "update inventory set tamount='$in' where cname= 'usd'"; 
    $result=mysqli_query($con, $sql);
    $sql = "update inventory set tamount='$out' where cname= 'pound'"; 
    $result=mysqli_query($con, $sql);
  
  }
  


    


    $insertQuery = "insert into purchase(bamount,buy,samount,sell,name,email,passport,accno,password) values('$bamount','$buy', '$totalAmount','$sell','$name','$email','$passport','$accno','$password')";
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

<script src="./script.js"></script>

</body>
</html>

