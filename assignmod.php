
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
    <link rel="stylesheet" href="assignmod_css.css">
    </head>
    <body>

    
    <form action="update-process.php" method="POST">
    <h1>Module Details</h1>
    <table class="content-table">
    
  <thead>
    <tr>
      <th>Schedule ID</th>
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
                <td><?php echo $rows['sched_id'];?></td>
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
<button name="btn-bck"class="back"><a href="calendar.php">Back</a></button>
<button name="btn-bck"class="back"><a href="overdue.php">Overdue</a></button>
<button name="btn-bck"class="back"><a href="received.php">Received</a></button>

</div>
<table class="content-table">
    
  <thead>
    <tr>
      <th></th>
      <th>Update List</th>
      <th></th>
      <th></th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
  
            <tr>
                <td>Schedule ID:</td>
                <td><input type="text" name="schedID"><br></td>
                
                <td><button name="update">Update</button></td>
            </tr>
            
    
  </tbody>
</table>

</form>
    </body>




</html>