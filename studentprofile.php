<?php
  
include("config.php");
include_once 'update.php';
    
// SQL query to select data from database
$sql = "SELECT * FROM student";
$result = $dbconnect->query($sql);
$sql2 = "SELECT parent.parent_name, parent.parent_contno FROM parent JOIN student ON parent.student_id = student.student_id";
$result2 = $dbconnect->query($sql2);
$dbconnect->close(); 
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="icon" href="image/tab-logo.png">
    <link rel="stylesheet" href="css/studentprofile.css">
    <link rel="stylesheet" href="css/popup_style.css">

  </head>
  <body>

    <!-- HEADER STARTS HERE -->  
    <div class="header">
      <a href="index.php"><img src="image/header/MTlogo.png" alt="mtlogo" style="margin-left: 13px; width:70px;height:70px;"></a>
      <div style="font-size: 42px; margin-top: 5px; margin-right: 67%; margin-left: -89%; width: 24%; float: right;">Module Tracker</div>
      <div style="float: right; margin-top: 19px;">
        <a href="studentprofile.php"><img src="image/header/profile.png" alt="mtlogo" style="margin-left: 25px; width:40px;height:40px;"></a>
        
        <a href="s_assignmod.php"><img src="image/header/messages.png" alt="icon" style="margin-left: 25px; width:43px;height:40px;"></a>
        <a href="s_calendar.php"><img src="image/header/schedule.png" alt="icon" style="margin-left: 25px; width:40px;height:40px;"></a>
        <a href="logout.php"><img src="image/header/logout.png" alt="icon" style="margin-left: 25px; width:40px;height:40px;"></a>
      </div>
    </div>
    <!-- HEADER ENDS HERE -->

      <div class="wrapper">
        <div class="left">
        <?php
          while($rows=$result->fetch_assoc()){
        ?>
          <img src="image/profile.png" alt="user" width="100">
          <h4>Student ID<p><?php echo $rows['student_id'];?></p></h4>
          <h4>Year and Section<p><?php echo $rows['ad_grade'];?> - <?php echo $rows['ad_section'];?></p></h4>
          <h4>School<p><?php echo $rows['school_name'];?></p></h4>
          
        </div>

      <div class="right">
        <div class="info">
          <button onclick="openForm();" name="edit" style="float: right; margin-right: 64%; width: 49px; color: grey;">Edit</button><h3>Student Profile</h3>
            <div class="info_data">
                 <div class="data">
                    <input type="hidden" name="student_id" value="<?php echo $rows['student_id'];?>">
                    <h4>Full Name:<p><?php echo $rows['student_name'];?></p></h4>
                    <br>
                    <h4>Birthday:<p><?php echo $rows['birthdate'];?></p></h4>
                    <br>
                    <h4>Phone:<p><?php echo $rows['student_contno'];?></p></h4>
                  </div>

                  <div class="data">
                    <h4>Gender:<p><?php echo $rows['student_gender'];?></p></h4>
                    <br>
                    <h4>Email Address:<p><?php echo $rows['student_email'];?></p></h4>
                    <br>
                    <h4>Address:<p><?php echo $rows['student_add'];?></p></h4>
                  </div>
            </div>
        <?php
          }
        ?>

        </div>
        <div class="info">
        <?php
          while($rows=$result2->fetch_assoc()){
        ?>
          <h3>Parent</h3>
          <div class="info_data">
            <div class="data">
              <h4>Full Name:<p><?php echo $rows['parent_name'];?></p></h4>
              <br>
            </div>
            <div class="data">
              <h4>Phone:<p><?php echo $rows['parent_contno'];?></p></h4>
              <br>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
        <div class="projects">
            <h3>Subjects</h3>
            <div class="projects_data">
                 <div class="data">
                    <img src="image/calculator.png" alt="mtlogo" style="margin-left: 13px; width:70px;height:70px;">
                    <h4>Mathematics</h4><br>
                    <img src="image/dictionary.png" alt="mtlogo" style="margin-left: 13px; width:70px;height:70px;">
                    <h4>English</h4>
                 </div>
                 <div class="data">
                    <img src="image/science.png" alt="mtlogo" style="margin-left: 13px; width:70px;height:70px;">
                    <h4>Science</h4><br>
                    <img src="image/pe.png" alt="mtlogo" style="margin-left: 13px; width:75px;height:70px;">
                    <h4>Physical Education</h4>
                 </div>
                 <div class="data">
                    <img src="image/pinoy.png" alt="mtlogo" style="margin-left: 13px; width:70px;height:70px;">
                    <h4>Filipino</h4><br>
                    <img src="image/arts.png" alt="mtlogo" style="margin-left: 13px; width:70px;height:70px;">
                    <h4>Music and Arts</h4>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="form-popup" id="myForm">
      <form action="studentprofile.php" class="form-container" method="post">
      <div style="margin-top: 32px; text-align: center; font-size: 28px; font-weight: bold; color: #fff;">Edit Details<br></div>
      <label style="margin-left: 10px;text-align: center; font-size:15px;">(other details can only be change by informing your teacher.)</label>
        <div class="poptitle" style="font-size: 22px; padding-left: 24px; margin-top: 20px;">Phone</div>
        <input type="text" class="popdetails" name="student_contno" placeholder="Enter Text...">
        <div class="poptitle" style="font-size: 22px; padding-left: 24px;margin-top: 5px">Address</div>
        <input type="text" class="popdetails" name="student_add" placeholder="Enter here...">
        <input type="submit" class="btn-123" value="Save" name="save" id="save" style="margin-top: 25px;">        
        <input type="button" class="btn-123" value="Cancel" onclick="closeForm()">
      </form> 
    </div>  
  </body>
  <script src="functions.js"></script>
</html>