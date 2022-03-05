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
        </tr>
        <?php
  
            // Use foreach to access all the courses data
            foreach ($All_courses as $course) { ?>
            <tr> 
                <td><?php
                    if($course['status']=="1") 
                      echo $course['Course_name'];
                  ?>
                 </td>
                <td><?php 
                        if($course['status']=="1") 
                        echo "Active";
                    ?>                          
                </td>
            </tr>
           <?php
                }
                // End the foreach loop 
           ?>
    </table>
    <a href="course-page.php">Course Table</a>

</body>
  
</html>