<?php
  include("db_connect.php");
  
  session_start();
$sql = "SELECT * FROM schedule WHERE status = 'Done'";

$result = $con->query($sql);

$con->close(); 



?>
<html><head>
    <meta charset = "utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Received Modules</title>
    <link rel="stylesheet" href="assignmod_css.css">
    </head>
    <body>

    
    <form action="" method="POST">
    <h1>Received Modules</h1>
    <table class="content-table">
    
  <thead>
    <tr>
      <th>Schedule ID</th>
      <th>Name</th>
      <th>Schedule Type</th>
      <th>Subject</th>
      <th>Module No.</th>
      <th>Status</th>
      <th>Date</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['sched_id'];?></td>
                <td><?php echo $rows['student_name'];?></td>
                <td><?php echo $rows['schedtype'];?></td>
                <td><?php echo $rows['subject_name'];?></td>
                <td><?php echo $rows['module_no'];?></td>
                <td><?php echo $rows['status'];?></td>
                <td><?php echo $rows['actualtime'];?></td>
                
                
            </tr>
            <?php
                }

                
             ?>
    
  </tbody>
  </table>
  <button name="btn-bck"class="back"><a href="calendar.php">Back</a></button>

</form>
    </body>




</html>