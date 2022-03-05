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
<div class="container">   
  <h1 style="text-align: center; margin:2rem 0;">Candidate List</h1>  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Candidate Name</th>
      <th scope="col">Candidate Email</th>
      <th scope="col">Candidate Phone</th>
      <th scope="col">Candidate Degree</th>
      <th scope="col">Candidate Refer</th>
      <th scope="col">Candidate Job Post</th>
    </tr>
  </thead>
  <tbody>
  <?php

$id = $_GET['viewId'];
$selectQuery="Select * from candidate where id = '$id'";
$result=mysqli_query($con, $selectQuery);
if($result){
  while($row=mysqli_fetch_array($result)){
      $name=$row['name'];
      $email=$row['email'];
      $phone=$row['phone'];
      $degree=$row['degree'];
      $refer=$row['refer'];
      $jobpost=$row['jobpost'];

      echo '<tr>
      <td>'.$name.'</td>
      <td> <span class="email-style">'.$email.'</span></td>
      <td>'.$phone.'</td>
      <td>'.$degree.'</td>
      <td>'.$refer.'</td>
      <td>'.$jobpost.'</td>
      </tr>';
  }
}
?>
</tbody>
</table>
</div>
</body>
</html>


</script>