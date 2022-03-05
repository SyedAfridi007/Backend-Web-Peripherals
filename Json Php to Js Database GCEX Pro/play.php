<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


</head>

<style>
  th{
    text-align: center;
  }
  td{
    text-align: center;
  }
  .email-style{
    background-color: #dee2e6;
    padding:.2rem ;
  }
  .fas{
    font-size: 1.5rem;
  }
  .fa-info-circle{
    margin-right: .5rem;
    color: blueviolet;
  }
  .fa-info-circle:hover{
    color: blueviolet;
  }
  .fa-edit{
    margin:0 .5rem;
    color: green;
  }
  .fa-edit:hover{
    color: green;
  }
  .fa-trash-alt{
    color: red;
    margin-left: .5rem;
  }
  .fa-trash-alt:hover{
    color: red;
  }
 
  a{
    text-decoration: none;
  }
  .btn-primary{
    background: indigo;
    border: none;
  }
  .btn-danger{
    border: none;
  }
</style>
<body>

<?php

$selectQuery="Select * from currency where id = 1";
$res1=mysqli_query($con, $selectQuery);

$selectQuery="Select * from currency where id = 2";
$res2=mysqli_query($con, $selectQuery);

$selectQuery="Select * from currency where id = 4";
$res3=mysqli_query($con, $selectQuery);

if($res1){
  while($row=mysqli_fetch_array($res1)){
      $id1=$row['id'];
      $name1=$row['name'];
      $buy1=$row['buy'];
      $sell1=$row['sell'];
  }
}

if($res2){
    while($row=mysqli_fetch_array($res2)){
        $id2=$row['id'];
        $name2=$row['name'];
        $buy2=$row['buy'];
        $sell2=$row['sell'];
    }
  }

if($res3){
    while($row=mysqli_fetch_array($res3)){
        $id3=$row['id'];
        $name3=$row['name'];
        $buy3=$row['buy'];
        $sell3=$row['sell'];
    }
  }
?>

<script>
    var row1 = '<?=$name1?>';
    console.log(row1);

    var row2 = '<?=$name2?>';
    console.log(row2);

    var row3 = '<?=$buy2?>';
    console.log(row3);

    var row4 = '<?=$buy3?>';
    console.log(row4*row3);

   
</script>



</body>
</html>


</script>