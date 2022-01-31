<?php
  include("db_connect.php");
  
  session_start();
$sql = "SELECT * FROM student ";

$result = $con->query($sql);

$con->close(); 



?>
<html><head>
    <meta charset = "utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="assignmod_css.css">
    </head>
    <body>

    
    <form action="" method="POST">
    <h1>Student List</h1>
    <table class="content-table">
    
  <thead>
    <tr>
      <th>Student ID</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Grade</th>
      <th>Section</th>
      <th>Contact No.</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['student_id'];?></td>
                <td><?php echo $rows['student_name'];?></td>
                <td><?php echo $rows['student_gender'];?></td>
                <td><?php echo $rows['ad_grade'];?></td>
                <td><?php echo $rows['ad_section'];?></td>
                <td><?php echo $rows['student_contno'];?></td>
                
                
            </tr>
            <?php
                }

                
             ?>
    
  </tbody>
</table>

<br>
<div class="btn">
<button name="btn-bck"class="back"><a href="teacherprofile.php">Back</a></button>
<button name="btn-bck"class="back"><a href="addstudent.php">Add Student</a></button>


</div>

</form>
    </body>




</html>