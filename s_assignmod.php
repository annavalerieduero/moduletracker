
<?php
  include("db_connect.php");
  
  session_start();
$sql = "SELECT * FROM schedule ";

$result = $con->query($sql);

$con->close(); 




?>
<html><head>
    <meta charset = "utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Details</title>
    <link rel="stylesheet" href="css/assignmod_css.css">
    </head>
    <body>

    
    <form action="" method="POST">
    <h1>Module Details</h1>
    <table class="content-table">
    
  <thead>
    <tr>
      
      <th>Name</th>
      <th>Schedule Type</th>
      <th>Subject</th>
      <th>Module No.</th>
      <th>Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                
                <td><?php echo $rows['student_name'];?></td>
                <td><?php echo $rows['schedtype'];?></td>
                <td><?php echo $rows['subject_name'];?></td>
                <td><?php echo $rows['module_no'];?></td>
                <td><?php echo $rows['status'];?></td>
                
            </tr>
            <?php
                }

                
             ?>
    
  </tbody>
</table>

<br>
<div class="btn">
<button name="btn-bck"class="back"><a href="s_calendar.php">Back</a></button>
</div>

</form>
    </body>




</html>