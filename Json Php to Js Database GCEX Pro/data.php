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
  
       <form class="container" action="" method="post">
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

              </div>
          </div>
          <input type="submit" name="submit" class="btn" value="Submit">
      </form>
  
      <div class="popup">
          <div class="details">
              <h2>Exchange Transaction Amount</h2>
              <div class="text">
                  <p></p>
                  <p></p>
                  <p></p>
              </div>
           
              <button class="cls-btn"><a href="final.php">Proceed</a></button>
          </div>
      </div>


<!--DATA BASE----->
<script src="./script.js"></script>







<?php

if(isset($_POST['submit'])){
   $amount = $_POST['amount'];
   $buy = $_POST['buy'];
   $sell = $_POST['sell'];


$selectQuery="Select * from inventory where cname = 'usd'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$tusdArray = array();
$tusdArray[1] = array();
$tusdArray[1]['cname'] = $row['cname'];
$tusdArray[1]['tamount'] = $row['tamount'];
//echo $tusdArray[1]['tamount'];


$selectQuery="Select * from currency where name = 'usd'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$usdArray = array();
$usdArray[1] = array();
$usdArray[1]['name'] = $row['name'];
$usdArray[1]['buy'] = $row['buy'];
$usdArray[1]['sell'] = $row['sell'];



$selectQuery="Select * from currency where name = 'pound'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$poundArray = array();
$poundArray[2] = array();
$poundArray[2]['name'] = $row['name'];
$poundArray[2]['buy'] = $row['buy'];
$poundArray[2]['sell'] = $row['sell'];
//echo $array[2]['buy'];



//cho $array[1]['buy']* $amount;

if($_POST['buy']='usd' && $_POST['sell'] = 'pound'){
  $buyAmount = $usdArray[1]['buy'] * $amount;
  $totalAmount = round($buyAmount/ $poundArray[2]['sell']);
  $out = $tusdArray[1]['tamount'] - $amount;

  echo $in;
  echo $totalAmount;

  $sql = "update inventory set tamount='$out' where cname= 'usd'"; 
  $result=mysqli_query($con, $sql);



}











$selectQuery="Select * from currency where name = 'euro'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[3] = array();
$array[3]['name'] = $row['name'];
$array[3]['buy'] = $row['buy'];
$array[3]['sell'] = $row['sell'];







$selectQuery="Select * from currency where name = 'yuan'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[4] = array();
$array[4]['name'] = $row['name'];
$array[4]['buy'] = $row['buy'];
$array[4]['sell'] = $row['sell'];





$selectQuery="Select * from currency where name = 'riyal'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[5] = array();
$array[5]['name'] = $row['name'];
$array[5]['buy'] = $row['buy'];
$array[5]['sell'] = $row['sell'];






$selectQuery="Select * from currency where name = 'dinar'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[6] = array();
$array[6]['name'] = $row['name'];
$array[6]['buy'] = $row['buy'];
$array[6]['sell'] = $row['sell'];




$selectQuery="Select * from currency where name = 'indian rupee'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[7] = array();
$array[7]['name'] = $row['name'];
$array[7]['buy'] = $row['buy'];
$array[7]['sell'] = $row['sell'];





$selectQuery="Select * from currency where name = 'ringgit'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[8] = array();
$array[8]['name'] = $row['name'];
$array[8]['buy'] = $row['buy'];
$array[8]['sell'] = $row['sell'];

}
?>

</body>
</html>


