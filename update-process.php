<?php
  include("db_connect.php");
  
  session_start();
$sql = "SELECT * FROM schedule ";

$result = $con->query($sql);


date_default_timezone_set('Asia/Singapore');
$date = date('y-m-d h:i');

$schedID = $_POST['schedID'];

if(isset($_POST['update'])){

    $qry = "UPDATE schedule SET actualtime = '$date', status = 'Done' WHERE sched_id = $schedID";
    
    $qry_run = mysqli_query($con, $qry);

    header("Location: assignmod.php");
}else{
    header("Location: sched.php");
}
   
    ?>





</html>