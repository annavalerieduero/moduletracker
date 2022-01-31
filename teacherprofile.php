<?php
  
include("config.php");
include("update2.php");
    
// SQL query to select data from database
$sql = "SELECT * FROM teacher";
$result = $dbconnect->query($sql);
$dbconnect->close(); 
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="icon" href="image/tab-logo.png">
    <link rel="stylesheet" href="css/teacherprofile.css">
    <link rel="stylesheet" href="css/popup_style.css">
  </head>
  <body>
    <!-- HEADER STARTS HERE -->  
    <div class="header">
    <a href="index.php"><img src="image/header/MTlogo.png" alt="mtlogo" style="margin-left: 13px; width:70px;height:70px;"></a>
      <div style="font-size: 42px; margin-top: 5px; margin-right: 67%; margin-left: -89%; width: 24%; float: right;">Module Tracker</div>
      <div style="float: right; margin-top: 19px;">
        <a href="teacherprofile.php"><img src="image/header/profile.png" alt="mtlogo" style="margin-left: 25px; width:40px;height:40px;"></a>
        <a href="viewslist.php"><img src="image/header/list.png" alt="icon" style="margin-left: 25px; width:43px;height:40px;"></a>
        <a href="assignmod.php"><img src="image/header/messages.png" alt="icon" style="margin-left: 25px; width:43px;height:40px;"></a>
        <a href="calendar.php"><img src="image/header/schedule.png" alt="icon" style="margin-left: 25px; width:40px;height:40px;"></a>
        <a href="logout.php"><img src="image/header/logout.png" alt="icon" style="margin-left: 25px; width:40px;height:40px;"></a>
      </div>
    </div>
    <!-- HEADER ENDS HERE -->

    <div>
      <div class="wrapper">
        <div class="left">
        <?php
          while($rows=$result->fetch_assoc()){
        ?>
          <img src="image/profile.png" alt="user" width="100">
          <h4>Teacher ID<p><?php echo $rows['teacher_id'];?></p></h4>
          <h4>School ID<p><?php echo $rows['school_id'];?></p></h4>
        </div>
      <div class="right">
        <div class="info">
          <button onclick="openForm();" name="edit" style="float: right; margin-right: 60%; width: 49px; color: grey;">Edit</button><h3>Teacher's Profile</h3>
            <div class="info_data">
                 <div class="data">
                    <input type="hidden" name="teacher_id" value="<?php echo $rows['teacher_id'];?>">
                    <h4>Full Name:<p><?php echo $rows['teacher_name'];?></p></h4>
                    <br>
                    <h4>Email Address:<p><?php echo $rows['teacher_email'];?></p></h4>
                    <br>
                    
                    
                  </div>
                  <div class="data">
                    <h4>Phone:<p><?php echo $rows['teacher_contno'];?></p></h4>
                    <br>
                    <h4>Address:<p><?php echo $rows['teacher_address'];?></p></h4>
                  </div>
            </div>
        </div>
        <?php
          }
        ?>
      </div>
    </div> 
    <div class="form-popup" id="myForm">
      <form action="teacherprofile.php" class="form-container" style="height: 55%;margin-bottom: -3%;" method="post">
      <div style="margin-top: 32px; text-align: center; font-size: 28px; font-weight: bold; color: #fff;">Edit Details<br></div>
        <div class="poptitle" style="font-size: 22px; padding-left: 24px;margin-top: 5px">Name</div>
        <input type="text" class="popdetails" name="teacher_name" placeholder="Enter here...">
        <div class="poptitle" style="font-size: 22px; padding-left: 24px; margin-top: 20px;">Phone</div>
        <input type="text" class="popdetails" name="teacher_contno" placeholder="Enter Text...">
        <div class="poptitle" style="font-size: 22px; padding-left: 24px;margin-top: 5px">Address</div>
        <input type="text" class="popdetails" name="teacher_address" placeholder="Enter here...">
        
        
        <input type="submit" class="btn-123" value="Save" name="save2" id="save2" style="margin-top: 25px;">        
        <input type="button" class="btn-123" value="Cancel" onclick="closeForm()">
      </form> 
    </div>  
  </body>
  <script src="functions.js"></script>
</html>