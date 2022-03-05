<?php
include 'connection.php';


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.service-container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-41.2%,-50%);
    width: 85%;
    height: 100%;
}
.form-container{
  width: 60%;
  height: 100%;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
 
}

.container{
    width: 100%;
    height: 100vh;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.big-title{
    margin-bottom: 2rem;
    color: black;
    font-size: 1.5rem;
}

.card{
    width: 100%;
    height: 65%;
    background-color:white;
    border-radius: 10px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}
.card .card-body{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
.input{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30%;
    margin: 0 .2rem 0 .2rem;
}
.input input::placeholder{
    color: crimson;
}
.input input:focus{
    outline: none;
}


.input input{
    padding: .6rem;
    border: 2px solid crimson;
    background-color: transparent;
    border-radius: 5px;  
}
.custom-select {
    position: relative;
    font-family: Arial;
  }
  
  .custom-select select {
    display: none; 
  }
  
  .select-selected {
    background-color:crimson;
  }
  
  .select-selected:after {
    position: absolute;
    content: "";
    top: 14px;
    right: 10px;
    width: 0;
    height: 0;
    border: 6px solid transparent;
    border-color: #fff transparent transparent transparent;
  }
  
  .select-selected.select-arrow-active:after {
    border-color: transparent transparent #fff transparent;
    top: 7px;
  }
  
  .select-items div,.select-selected {
    color: #ffffff;
    padding: 8px 16px;
    border: 1px solid transparent;
    border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
    cursor: pointer;
  }
  
  .select-items {
    position: absolute;
    background-color: crimson;
    top: 100%;
    left: 0;
    right: 0;
    z-index: 99;
  }
  
  .select-hide {
    display: none;
  }
  
  .select-items div:hover, .same-as-selected {
    background-color: rgba(0, 0, 0, 0.1);
  }

  .container input[type=submit]{
      margin-top: 1rem;
      border: none;
      background-color: black;
      padding: .8rem 1.5rem;
      color: white;
      cursor: pointer;
      font-size: 1.2rem;
      border-radius: 5px;
  }

  .popup{
    display: none;
  }

  .popup.active{
    position: fixed; 
    z-index: 1; 
    left: 0%;
    top: 0;
    width: 100%; 
    height: 100vh;
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
  }
  .popup .details.active{
    background-color: #fefefe;
    border: 1px solid #888;
    width: 500px; 
    height: 350px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    left: 35%;
    top: 30%;
    transition: .5s;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    border-radius: 5px;
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
  }
  .details h2{
    color: crimson;
    margin-bottom: 1.5rem;

  }
  .details p{
    color: black;
    font-size: 1.2rem;
    margin:.5rem 0 ;

  }

  .details .cls-btn{
    outline: none;
    border: none;
    padding: .8rem 1.2rem;
    border-radius: 2px;
    margin-top: 1rem;
    background-color: black;
    color: white;
  }
 
   @-webkit-keyframes animatezoom{
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
  }

</style>

<body>



  <div class="service-container">
    <div class="form-container">
    <form class="container" action="" method="post">
          <h1 class="big-title">Exchange Currency</h1>
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
                            <option value="taka">Taka</option>
                          </select>
                        </div>
                  </div>
  
  
                  <div class="input">
                      <input type="text" name="user" id="name"  placeholder="Enter Full name" required>
                      
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
          <input type="submit" name="purchaseBtn" class="btn" value="Purchase">
      </form>
    </div>
 
  <div class="popup">
          <div class="details">
              <h2>Transition Complete</h2>
              <div class="text">
                  <p></p>
                  <p></p>
                  <p></p>
                  <p></p>
                  <p></p>

              </div>
           
              <button class="cls-btn">Close</button>
          </div>
    </div>
  </div>




<script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        x = document.getElementsByClassName("custom-select");
        l = x.length;
          for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");

            for (j = 1; j < ll; j++) {
              c = document.createElement("DIV");
              c.innerHTML = selElmnt.options[j].innerHTML;
              c.addEventListener("click", function(e) {
   
              var y, i, k, s, h, sl, yl;
              s = this.parentNode.parentNode.getElementsByTagName("select")[0];
              sl = s.length;
              h = this.parentNode.previousSibling;

                for (i = 0; i < sl; i++) {
                  if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;

                    for (k = 0; k < yl; k++) {
                      y[k].removeAttribute("class");
                    }
                      this.setAttribute("class", "same-as-selected");
                  break;
                 }
                }
            h.click();
          });
         b.appendChild(c);
       }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {

      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }

  function closeAllSelect(elmnt) {
  
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;

      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
         arrNo.push(i)
        } else {
         y[i].classList.remove("select-arrow-active");
        }
      }

      for (i = 0; i < xl; i++) {
         if (arrNo.indexOf(i)) {
         x[i].classList.add("select-hide");
        }
      }
   }

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script>
  
//import view
$(document).ready(function() {
    if (localStorage.getItem("currencyData") !== null) {
        storedUsers = JSON.parse(localStorage.getItem("currencyData"));
    
        if (localStorage.getItem("currencyData").length !== 2) {
            $('table').append('<tr><th>ID</th><th> Currency Name </th><th> Buy Price </th><th> Sell Price </th></tr>');
        }
  
        for(i=0; i<storedUsers.length; i++){
            var id = i+1;
            $('table').append('<tr><td>' + id + '</td><td>' + storedUsers[i]['currencyName'] + '</td><td>' + storedUsers[i]['buyPrice'] + '</td><td>' + storedUsers[i]['sellPrice'] + '</td></tr>');		
        }
    }
  });
  
  //user operation
  
  const form = document.querySelector('form')
  
  const amount = form.querySelector('#amount');
  const buy = form.querySelector('#buy');
  const sell = form.querySelector('#sell');
  const name = form.querySelector('#name');
  const email = form.querySelector('#email');
  const passport = form.querySelector('#passport');
  const accno = form.querySelector('#accno');
  const password = form.querySelector('#password');
  const convert = form.querySelector('.convert')
  var total_amount= 0;
  var buy_amount= 0;
  var date = new Date();
  console.log(date);
  var cday = date.getDate();
  var cmounth = date.getMonth();
  var cyear = date.getFullYear();
  var chour = date.getHours();
  var cminite = date.getMinutes();
  var csecound = date.getSeconds();
  
  //console.log('Purchase Date:' + cday + ':' + cmounth + ':' + cyear + ' Time:' + chour + ':' + cminite + ':' + csecound );
  
  
  
  form.addEventListener('submit',formHandler)
  
  function formHandler(e){
    

    <?php
    $amount = $_POST['amount'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];
    $name = $_POST['user'];
    $email = $_POST['email'];
    $passport = $_POST['passport'];
    $accno = $_POST['accno'];
    $password = $_POST['password'];
 

    $insertQuery = "insert into purchase(amount, buy, sell, name, email, passport, accno, password) values('$amount','$sell','$buy','$name','$email','$passport','$accno','$password')";
    $res = mysqli_query($con,$insertQuery);   
    if($res){
        ?>
           e.preventDefault();
           popup.classList.add('active');
           details.classList.add('active')
           popup.style.display= "block";
        <?php   
    }  
    else{
      ?>
          alert("data not Inserted")
      <?php
  }  
  ?>
      //USD
      if (buy.value == 'usd' && sell.value == 'taka'){
        total_amount= (amount.value * storedUsers[0]['buyPrice']).toFixed(2);
        //console.log(total_amount);
      }
      else if (buy.value == 'usd' && sell.value == 'pound'){
        buy_amount= (amount.value * storedUsers[0]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[1]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'usd' && sell.value == 'euro'){
        buy_amount= (amount.value * storedUsers[0]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[2]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'usd' && sell.value == 'yuan'){
        buy_amount= (amount.value * storedUsers[0]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[3]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'usd' && sell.value == 'riyal'){
        buy_amount= (amount.value * storedUsers[0]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[4]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'usd' && sell.value == 'dinar'){
        buy_amount= (amount.value * storedUsers[0]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[5]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'usd' && sell.value == 'rupee'){
        buy_amount= (amount.value * storedUsers[0]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[6]['sellPrice']).toFixed(2);
      }
  
      //POUND
      else if (buy.value == 'pound' && sell.value == 'taka'){
        total_amount= (amount.value * storedUsers[1]['buyPrice']).toFixed(2);
        //console.log(total_amount);
      }
      else if (buy.value == 'pound' && sell.value == 'usd'){
        buy_amount= (amount.value * storedUsers[1]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[0]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'pound' && sell.value == 'euro'){
        buy_amount= (amount.value * storedUsers[1]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[2]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'pound' && sell.value == 'yuan'){
        buy_amount= (amount.value * storedUsers[1]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[3]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'pound' && sell.value == 'riyal'){
        buy_amount= (amount.value * storedUsers[1]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[4]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'pound' && sell.value == 'dinar'){
        buy_amount= (amount.value * storedUsers[1]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[5]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'pound' && sell.value == 'rupee'){
        buy_amount= (amount.value * storedUsers[1]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[6]['sellPrice']).toFixed(2);
      }
  
      //Euro
      else if (buy.value == 'euro' && sell.value == 'taka'){
        total_amount= (amount.value * storedUsers[2]['buyPrice']).toFixed(2);
        //console.log(total_amount);
      }
      else if (buy.value == 'euro' && sell.value == 'usd'){
        buy_amount= (amount.value * storedUsers[2]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[0]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'euro' && sell.value == 'pound'){
        buy_amount= (amount.value * storedUsers[2]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[1]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'euro' && sell.value == 'yuan'){
        buy_amount= (amount.value * storedUsers[2]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[3]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'euro' && sell.value == 'riyal'){
        buy_amount= (amount.value * storedUsers[2]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[4]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'euro' && sell.value == 'dinar'){
        buy_amount= (amount.value * storedUsers[2]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[5]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'euro' && sell.value == 'rupee'){
        buy_amount= (amount.value * storedUsers[2]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[6]['sellPrice']).toFixed(2);
      }
  
      //Yuan
      else if (buy.value == 'yuan' && sell.value == 'taka'){
        total_amount= (amount.value * storedUsers[2]['buyPrice']).toFixed(2);
        //console.log(total_amount);
      }
      else if (buy.value == 'yuan' && sell.value == 'usd'){
        buy_amount= (amount.value * storedUsers[3]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[0]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'yuan' && sell.value == 'pound'){
        buy_amount= (amount.value * storedUsers[3]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[1]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'yuan' && sell.value == 'euro'){
        buy_amount= (amount.value * storedUsers[3]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[2]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'yuan' && sell.value == 'riyal'){
        buy_amount= (amount.value * storedUsers[3]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[4]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'yuan' && sell.value == 'dinar'){
        buy_amount= (amount.value * storedUsers[3]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[5]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'yuan' && sell.value == 'rupee'){
        buy_amount= (amount.value * storedUsers[3]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[6]['sellPrice']).toFixed(2);
      }
  
      //Riyal
      else if (buy.value == 'riyal' && sell.value == 'taka'){
        total_amount= (amount.value * storedUsers[4]['buyPrice']).toFixed(2);
        //console.log(total_amount);
      }
      else if (buy.value == 'riyal' && sell.value == 'usd'){
        buy_amount= (amount.value * storedUsers[4]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[0]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'riyal' && sell.value == 'pound'){
        buy_amount= (amount.value * storedUsers[4]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[1]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'riyal' && sell.value == 'euro'){
        buy_amount= (amount.value * storedUsers[4]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[2]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'riyal' && sell.value == 'yuan'){
        buy_amount= (amount.value * storedUsers[4]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[3]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'riyal' && sell.value == 'dinar'){
        buy_amount= (amount.value * storedUsers[4]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[5]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'riyal' && sell.value == 'rupee'){
        buy_amount= (amount.value * storedUsers[4]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[6]['sellPrice']).toFixed(2);
      }
  
      //Dinar
      else if (buy.value == 'dinar' && sell.value == 'taka'){
        total_amount= (amount.value * storedUsers[5]['buyPrice']).toFixed(2);
        //console.log(total_amount);
      }
      else if (buy.value == 'dinar' && sell.value == 'usd'){
        buy_amount= (amount.value * storedUsers[5]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[0]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'dinar' && sell.value == 'pound'){
        buy_amount= (amount.value * storedUsers[5]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[1]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'dinar' && sell.value == 'euro'){
        buy_amount= (amount.value * storedUsers[5]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[2]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'dinar' && sell.value == 'yuan'){
        buy_amount= (amount.value * storedUsers[5]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[3]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'dinar' && sell.value == 'riyal'){
        buy_amount= (amount.value * storedUsers[5]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[4]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'dinar' && sell.value == 'rupee'){
        buy_amount= (amount.value * storedUsers[4]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[6]['sellPrice']).toFixed(2);
      }
  
      //Rupee
      else if (buy.value == 'rupee' && sell.value == 'taka'){
        total_amount= (amount.value * storedUsers[6]['buyPrice']).toFixed(2);
        //console.log(total_amount);
      }
      else if (buy.value == 'rupee' && sell.value == 'usd'){
        buy_amount= (amount.value * storedUsers[6]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[0]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'rupee' && sell.value == 'pound'){
        buy_amount= (amount.value * storedUsers[6]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[1]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'rupee' && sell.value == 'euro'){
        buy_amount= (amount.value * storedUsers[6]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[2]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'rupee' && sell.value == 'yuan'){
        buy_amount= (amount.value * storedUsers[6]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[3]['sellPrice']).toFixed(2);
      }
      else if (buy.value == 'rupee' && sell.value == 'riyal'){
        buy_amount= (amount.value * storedUsers[6]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[4]['sellPrice']).toFixed(2);
      }
      else if(buy.value == 'rupee' && sell.value == 'dinar'){
        buy_amount= (amount.value * storedUsers[4]['buyPrice'])
        total_amount=(buy_amount/ storedUsers[5]['sellPrice']).toFixed(2);
      }
  
      var text = document.querySelectorAll('p')

      text[0].innerText = "Name: " + name.value; 
      text[1].innerText = "Purchase Amount: " + amount.value +" "+buy.value;
      text[2].innerText = "Sell Amount: " + total_amount +" "+sell.value;
      text[3].innerText = "Account Number: " + accno.value;
      text[4].innerText = "Purchase Date: " + cday + ':' + cmounth + ':' + cyear + ' Time:' + chour + ':' + cminite + ':' + csecound ;

  }
  

  var opbtn = document.querySelector('.btn');
  var popup = document.querySelector('.popup');
  var details = document.querySelector('.details');
  var clsbtn = document.querySelector('.cls-btn');
  
  
  clsbtn.addEventListener('click', function(){
      popup.classList.remove('active');
      details.classList.remove('active');
      popup.style.display= "none";
   })
   
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   
  
  
</script>
</body>
</html>