<?php
include 'processForm.php';

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-4 offset-md-4 form-div">
            <table class="table table-bordered">
                <thead>
                    <th>Profile Image</th>
                    <th>Bio</th>
                    <th>Operation</th>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td>
                           <img src="images/<?php echo $user['profile_image']; ?>" width="80">
                        </td>
                        <td>
                          <?php echo $user['bio'];?>
                        </td>

                        <td>
                            <?php
                             echo "<a href=view.php?viewId=".$user['id']." class='btn green'>View</a>";
                             echo "<a href=update.php?updateId=".$user['id']." class='btn green'>Update</a>";

                             ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


    
</body>
</html>