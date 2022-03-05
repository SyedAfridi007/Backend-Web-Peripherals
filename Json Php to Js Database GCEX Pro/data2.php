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
  
       <form class="container" action="">
          <h1 class="title">Exchange your Currency</h1>
          <div class="card">
              <div class="card-body">
                  <div class="input">
                      <input type="text" name="amount" id="amount" placeholder="Enter Amount" required>
                  </div>
                  
                  <div class="input">
                      <div class="custom-select" style="width:200px;">
                          <select id="buy" required>
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
                          <select id="sell" required>
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
          <input type="submit" class="btn" value="Submit">
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

<?php

$selectQuery="Select * from currency where name = 'usd'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[1] = array();
$array[1]['name'] = $row['name'];
$array[1]['buy'] = $row['buy'];
$array[1]['sell'] = $row['sell'];

$usd = json_encode($array );
?>

<?php

$selectQuery="Select * from currency where name = 'pound'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[2] = array();
$array[2]['name'] = $row['name'];
$array[2]['buy'] = $row['buy'];
$array[2]['sell'] = $row['sell'];

$pound = json_encode($array );
?>

<?php

$selectQuery="Select * from currency where name = 'euro'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[3] = array();
$array[3]['name'] = $row['name'];
$array[3]['buy'] = $row['buy'];
$array[3]['sell'] = $row['sell'];

$euro = json_encode($array );
?>



<?php

$selectQuery="Select * from currency where name = 'yuan'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[4] = array();
$array[4]['name'] = $row['name'];
$array[4]['buy'] = $row['buy'];
$array[4]['sell'] = $row['sell'];

$yuan = json_encode($array );
?>

<?php

$selectQuery="Select * from currency where name = 'riyal'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[5] = array();
$array[5]['name'] = $row['name'];
$array[5]['buy'] = $row['buy'];
$array[5]['sell'] = $row['sell'];

$riyal = json_encode($array );
?>


<?php

$selectQuery="Select * from currency where name = 'dinar'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[6] = array();
$array[6]['name'] = $row['name'];
$array[6]['buy'] = $row['buy'];
$array[6]['sell'] = $row['sell'];

$dinar = json_encode($array );
?>

<?php

$selectQuery="Select * from currency where name = 'indian rupee'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[7] = array();
$array[7]['name'] = $row['name'];
$array[7]['buy'] = $row['buy'];
$array[7]['sell'] = $row['sell'];

$indian = json_encode($array );
?>

<?php

$selectQuery="Select * from currency where name = 'ringgit'";
$result=mysqli_query($con, $selectQuery);
$row=mysqli_fetch_array($result);

$array = array();

$array[8] = array();
$array[8]['name'] = $row['name'];
$array[8]['buy'] = $row['buy'];
$array[8]['sell'] = $row['sell'];

$ringgit = json_encode($array );
?>





<script>

//DATABASE VARIABLES

var usdEncoded = '<?=$usd?>';
var usd = JSON.parse(usdEncoded);
console.log(usd[1]['buy']);

var poundEncoded = '<?=$pound?>';
var pound = JSON.parse(poundEncoded);
console.log(pound[2]['name']);

var euroEncoded = '<?=$euro?>';
var euro = JSON.parse(euroEncoded);
console.log(euro[3]['name']);

var yuanEncoded = '<?=$yuan?>';
var yuan = JSON.parse(yuanEncoded);
console.log(yuan[4]['name']);

var riyalEncoded = '<?=$riyal?>';
var riyal = JSON.parse(riyalEncoded);
console.log(riyal[5]['name']);

var dinarEncoded = '<?=$dinar?>';
var dinar = JSON.parse(dinarEncoded);
console.log(dinar[6]['name']);

var indianEncoded = '<?=$indian?>';
var indian = JSON.parse(indianEncoded);
console.log(indian[7]['buy']);

var ringgitEncoded = '<?=$ringgit?>';
var ringgit = JSON.parse(ringgitEncoded);
console.log(ringgit[8]['buy']);
  



//DOCUMENT VARIABLES
const form = document.querySelector('form')

const amount = form.querySelector('#amount');
const buy = form.querySelector('#buy');
const sell = form.querySelector('#sell');

var total_amount= 0;
var buy_amount= 0;
var date = new Date();
var cday = date.getDate();
var cmounth = date.getMonth();
var cyear = date.getFullYear();
var chour = date.getHours();
var cminite = date.getMinutes();
var csecound = date.getSeconds();



form.addEventListener('submit',formHandler)
var text = document.querySelectorAll('p')

function formHandler(e){
    e.preventDefault();
    popup.classList.add('active');
    details.classList.add('active')
    popup.style.display= "block";

    //FUNCTION START

    if(buy.value == '0' && sell.value == '0' || buy.value =='0' || sell.value == '0' ||  buy.value == sell.value){
      popup.classList.remove('active');
      details.classList.remove('active');
      alert('Transaction Failed');
    }

    //USD

    else if (buy.value == 'usd' && sell.value == 'taka'){
      total_amount= (amount.value * usd[1]['buy']).toFixed(2);
      console.log(total_amount);
    }
    else if (buy.value == 'usd' && sell.value == 'pound'){
      buy_amount= (amount.value * usd[1]['buy']) ;
      total_amount=(buy_amount/ pound[2]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'usd' && sell.value == 'euro'){
      buy_amount= (amount.value * usd[1]['buy']) 
      total_amount=(buy_amount/ euro[3]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'usd' && sell.value == 'yuan'){
      buy_amount= (amount.value * usd[1]['buy']) 
      total_amount=(buy_amount/ yuan[4]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'usd' && sell.value == 'riyal'){
      buy_amount= (amount.value * usd[1]['buy'])
      total_amount=(buy_amount/ riyal[5]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'usd' && sell.value == 'dinar'){
      buy_amount= (amount.value * usd[1]['buy'])
      total_amount=(buy_amount/ dinar[6]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'usd' && sell.value == 'rupee'){
      buy_amount= (amount.value *usd[1]['buy']) 
      total_amount=(buy_amount/ indian[7]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'usd' && sell.value == 'ringgit'){
      buy_amount= (amount.value *usd[1]['buy']) 
      total_amount=(buy_amount/ ringgit[8]['sell'] ).toFixed(2);
    }

    //POUND

    else if (buy.value == 'pound' && sell.value == 'taka'){
      total_amount= (amount.value * pound[2]['buy']).toFixed(2);
      console.log(total_amount);
    }
    else if (buy.value == 'pound' && sell.value == 'usd'){
      buy_amount= (amount.value * pound[2]['buy']) ;
      total_amount=(buy_amount/ usd[1]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'pound' && sell.value == 'euro'){
      buy_amount= (amount.value * pound[2]['buy']) 
      total_amount=(buy_amount/ euro[3]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'pound' && sell.value == 'yuan'){
      buy_amount= (amount.value * pound[2]['buy']) 
      total_amount=(buy_amount/ yuan[4]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'pound' && sell.value == 'riyal'){
      buy_amount= (amount.value * pound[2]['buy'])
      total_amount=(buy_amount/ riyal[5]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'pound' && sell.value == 'dinar'){
      buy_amount= (amount.value * pound[2]['buy'])
      total_amount=(buy_amount/ dinar[6]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'pound' && sell.value == 'rupee'){
      buy_amount= (amount.value *pound[2]['buy']) 
      total_amount=(buy_amount/ indian[7]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'pound' && sell.value == 'ringgit'){
      buy_amount= (amount.value *pound[2]['buy']) 
      total_amount=(buy_amount/ ringgit[8]['sell'] ).toFixed(2);
    }

    //EURO

    else if (buy.value == 'euro' && sell.value == 'taka'){
      total_amount= (amount.value * euro[3]['buy']).toFixed(2);
      console.log(total_amount);
    }
    else if (buy.value == 'euro' && sell.value == 'usd'){
      buy_amount= (amount.value * euro[3]['buy']) ;
      total_amount=(buy_amount/ usd[1]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'euro' && sell.value == 'pound'){
      buy_amount= (amount.value * euro[3]['buy']) 
      total_amount=(buy_amount/ pound[2]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'euro' && sell.value == 'yuan'){
      buy_amount= (amount.value * euro[3]['buy']) 
      total_amount=(buy_amount/ yuan[4]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'euro' && sell.value == 'riyal'){
      buy_amount= (amount.value * euro[3]['buy'])
      total_amount=(buy_amount/ riyal[5]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'euro' && sell.value == 'dinar'){
      buy_amount= (amount.value * euro[3]['buy'])
      total_amount=(buy_amount/ dinar[6]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'euro' && sell.value == 'rupee'){
      buy_amount= (amount.value *euro[3]['buy']) 
      total_amount=(buy_amount/ indian[7]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'euro' && sell.value == 'ringgit'){
      buy_amount= (amount.value *euro[3]['buy']) 
      total_amount=(buy_amount/ ringgit[8]['sell'] ).toFixed(2);
    }

    //YUAN

    else if (buy.value == 'yuan' && sell.value == 'taka'){
      total_amount= (amount.value * yuan[4]['buy']).toFixed(2);
      console.log(total_amount);
    }
    else if (buy.value == 'yuan' && sell.value == 'usd'){
      buy_amount= (amount.value * yuan[4]['buy']) ;
      total_amount=(buy_amount/ usd[1]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'yuan' && sell.value == 'pound'){
      buy_amount= (amount.value * yuan[4]['buy']) 
      total_amount=(buy_amount/ pound[2]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'yuan' && sell.value == 'euro'){
      buy_amount= (amount.value * yuan[4]['buy']) 
      total_amount=(buy_amount/ euro[3]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'yuan' && sell.value == 'riyal'){
      buy_amount= (amount.value * yuan[4]['buy'])
      total_amount=(buy_amount/ riyal[5]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'yuan' && sell.value == 'dinar'){
      buy_amount= (amount.value * yuan[4]['buy'])
      total_amount=(buy_amount/ dinar[6]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'yuan' && sell.value == 'rupee'){
      buy_amount= (amount.value *yuan[4]['buy']) 
      total_amount=(buy_amount/ indian[7]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'yuan' && sell.value == 'ringgit'){
      buy_amount= (amount.value *yuan[4]['buy']) 
      total_amount=(buy_amount/ ringgit[8]['sell'] ).toFixed(2);
    }

    //RIYAL

    else if (buy.value == 'riyal' && sell.value == 'taka'){
      total_amount= (amount.value * riyal[5]['buy']).toFixed(2);
      console.log(total_amount);
    }
    else if (buy.value == 'riyal' && sell.value == 'usd'){
      buy_amount= (amount.value * riyal[5]['buy']) ;
      total_amount=(buy_amount/ usd[1]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'riyal' && sell.value == 'pound'){
      buy_amount= (amount.value * riyal[5]['buy']) 
      total_amount=(buy_amount/ pound[2]['sell'] ).toFixed(2)
5   }
    else if (buy.value == 'riyal' && sell.value == 'euro'){
      buy_amount= (amount.value * riyal[5]['buy']) 
      total_amount=(buy_amount/ euro[3]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'riyal' && sell.value == 'yuan'){
      buy_amount= (amount.value * riyal[5]['buy'])
      total_amount=(buy_amount/ yuan[4]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'riyal' && sell.value == 'dinar'){
      buy_amount= (amount.value * riyal[5]['buy'])
      total_amount=(buy_amount/ dinar[6]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'riyal' && sell.value == 'rupee'){
      buy_amount= (amount.value *riyal[5]['buy']) 
      total_amount=(buy_amount/ indian[7]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'riyal' && sell.value == 'ringgit'){
      buy_amount= (amount.value *riyal[5]['buy']) 
      total_amount=(buy_amount/ ringgit[8]['sell'] ).toFixed(2);
    }

    
    //DINAR

    else if (buy.value == 'dinar' && sell.value == 'taka'){
      total_amount= (amount.value * dinar[6]['buy']).toFixed(2);
      console.log(total_amount);
    }
    else if (buy.value == 'dinar' && sell.value == 'usd'){
      buy_amount= (amount.value * dinar[6]['buy']) ;
      total_amount=(buy_amount/ usd[1]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'dinar' && sell.value == 'pound'){
      buy_amount= (amount.value * dinar[6]['buy']) 
      total_amount=(buy_amount/ pound[2]['sell'] ).toFixed(2)
5   }
    else if (buy.value == 'dinar' && sell.value == 'euro'){
      buy_amount= (amount.value * dinar[6]['buy']) 
      total_amount=(buy_amount/ euro[3]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'dinar' && sell.value == 'yuan'){
      buy_amount= (amount.value * dinar[6]['buy'])
      total_amount=(buy_amount/ yuan[4]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'dinar' && sell.value == 'riyal'){
      buy_amount= (amount.value * dinar[6]['buy'])
      total_amount=(buy_amount/ riyal[5]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'dinar' && sell.value == 'rupee'){
      buy_amount= (amount.value * dinar[6]['buy']) 
      total_amount=(buy_amount/ indian[7]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'dinar' && sell.value == 'ringgit'){
      buy_amount= (amount.value * dinar[6]['buy']) 
      total_amount=(buy_amount/ ringgit[8]['sell'] ).toFixed(2);
    }

    //RUPEE

    else if (buy.value == 'rupee' && sell.value == 'taka'){
      total_amount= (amount.value * indian[7]['buy']).toFixed(2);
      console.log(total_amount);
    }
    else if (buy.value == 'rupee' && sell.value == 'usd'){
      buy_amount= (amount.value * indian[7]['buy']) ;
      total_amount=(buy_amount/ usd[1]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'rupee' && sell.value == 'pound'){
      buy_amount= (amount.value * indian[7]['buy']) 
      total_amount=(buy_amount/ pound[2]['sell'] ).toFixed(2)
5   }
    else if (buy.value == 'rupee' && sell.value == 'euro'){
      buy_amount= (amount.value * indian[7]['buy']) 
      total_amount=(buy_amount/ euro[3]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'rupee' && sell.value == 'yuan'){
      buy_amount= (amount.value * indian[7]['buy'])
      total_amount=(buy_amount/ yuan[4]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'rupee' && sell.value == 'riyal'){
      buy_amount= (amount.value * indian[7]['buy'])
      total_amount=(buy_amount/ riyal[5]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'rupee' && sell.value == 'dinar'){
      buy_amount= (amount.value * indian[7]['buy']) 
      total_amount=(buy_amount/ dinar[6]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'rupee' && sell.value == 'ringgit'){
      buy_amount= (amount.value * indian[7]['buy']) 
      total_amount=(buy_amount/ ringgit[8]['sell'] ).toFixed(2);
    }


    //RINGGIT

    else if (buy.value == 'ringgit' && sell.value == 'taka'){
      total_amount= (amount.value * ringgit[8]['buy']).toFixed(2);
      console.log(total_amount);
    }
    else if (buy.value == 'ringgit' && sell.value == 'usd'){
      buy_amount= (amount.value * ringgit[8]['buy']) ;
      total_amount=(buy_amount/ usd[1]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'ringgit' && sell.value == 'pound'){
      buy_amount= (amount.value * ringgit[8]['buy']) 
      total_amount=(buy_amount/ pound[2]['sell'] ).toFixed(2)
5   }
    else if (buy.value == 'ringgit' && sell.value == 'euro'){
      buy_amount= (amount.value * ringgit[8]['buy']) 
      total_amount=(buy_amount/ euro[3]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'ringgit' && sell.value == 'yuan'){
      buy_amount= (amount.value * ringgit[8]['buy'])
      total_amount=(buy_amount/ yuan[4]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'ringgit' && sell.value == 'riyal'){
      buy_amount= (amount.value * ringgit[8]['buy'])
      total_amount=(buy_amount/ riyal[5]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'ringgit' && sell.value == 'rupee'){
      buy_amount= (amount.value * ringgit[8]['buy']) 
      total_amount=(buy_amount/ indian[7]['sell'] ).toFixed(2);
    }
    else if (buy.value == 'ringgit' && sell.value == 'rupee'){
      buy_amount= (amount.value * ringgit[8]['buy']) 
      total_amount=(buy_amount/ indian[7]['sell'] ).toFixed(2);
    }


    text[0].innerText = "Purchase Amount: " + amount.value +" "+buy.value;
    text[1].innerText = "Sell Amount: " + total_amount +" "+sell.value;
    text[2].innerText = "Date: " + cday + ':' + cmounth + ':' + cyear + ' Time:' + chour + ':' + cminite + ':' + csecound ;



    amount.value = "";
    buy.value = "";
    sell.value = "";
}

var popup = document.querySelector('.popup');
var details = document.querySelector('.details');
var clsbtn = document.querySelector('.cls-btn');

/*
clsbtn.addEventListener('click', function(){
    popup.classList.remove('active');
    details.classList.remove('active');
    popup.style.display= "none";

 })
 */
 
</script>

<script src="./script.js"></script>

</body>
</html>

