<?php
  
    // Connect to database 
    include 'connection.php';
  
    // Get all the courses from courses table
    // execute the query 
    // Store the result
    $sql = "SELECT * FROM `courses`";
    $Sql_query = mysqli_query($con,$sql);
    $All_courses = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
           content="width=device-width, initial-scale=1.0">
     
    <!-- Using internal/embedded css -->
    <style>
        .btn{
            background-color: red;
            border: none;
            color: white;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }
        .green{
            background-color: #199319;
        }
        .red{
            background-color: red;
        }
        table,th{
            border-style : solid;
            border-width : 1;
            text-align :center;
        }
        td{
            text-align :center;
        }
    </style>    
</head>
  
<body>
    <h2>Courses Table</h2>
    <table>
        <!-- TABLE TOP ROW HEADINGS-->
        <tr>
            <th>Course Name</th>
            <th>Course Status</th>
            <th>Toggle</th>
            <th>Operation</th>
        </tr>
        <?php
  
            // Use foreach to access all the courses data
            foreach ($All_courses as $course) { ?>
            <tr>
                <td><?php echo $course['Course_name']; ?></td>
                <td><?php 
                        if($course['status']=="1") 
                            echo "Active";
                        else 
                            echo "Inactive";
                    ?>                          
                </td>
                <td>
                    <?php 
                    if($course['status']=="1") 
  
                        echo "<a href=deactivate.php?id=".$course['id']." class='btn red'>Deactivate</a>";
                    else 
                        echo "<a href=activate.php?id=".$course['id']." class='btn green'>Activate</a>";
                    ?>
                </td>
                <td>
                    <?php
                        echo "<a href=update.php?updateId=".$course['id']." class='btn green'>Update</a>";
                        echo "<a href=delete.php?deleteId=".$course['id']." class='btn red'>Delete</a>";
                     ?>

                </td>

            </tr>
           <?php
                }
                // End the foreach loop 
           ?>
    </table>
    <a href="view.php">Veiw</a>
    <a href="add.php">ADD</a>

</body>
  
</html>