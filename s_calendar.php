<?php
  include("db_connect.php");
  
  session_start();
$sql = "SELECT * FROM schedule ";

$result = $con->query($sql);

$con->close(); 




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
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
   
  	<div class="hero"> 
      <div class="schedbg">
       <div class="calendar">
         <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <div></div>
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
        </div>

       
      
        
        <!--SCHEDULE-->
        <div class="sched-container">
          <h3 class="title">Schedules</h3>
          <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
          <div class="schedule">
          <div class="sched-left">
          <div class="sched-date">
          <div class="date"></div>
          <div class="month1"><?php echo $rows['schedtype'];?></div>
          </div>
          </div>
          
          <div class="sched-right">
            <h3 class="type"><?php echo $rows['subject_name'];?></h3>
            <h3 class="subject"><?php echo $rows['ftime'];?> - <?php echo $rows['ttime'];?></h3>
            <h3 class="modulenum"><?php echo $rows['date'];?></h3>
            
          <div class="time">
            <p>Mod No.<?php echo $rows['module_no'];?></p>
          </div>
          </div>
          </div>
          <?php
                }

                
             ?>
          
          

         

        <!--SCHEDULE 2-->
          <!--<div class="schedule2">
          <div class="sched-left2">
          <div class="sched-date2">
          <div class="date2">26</div>
          <div class="month2">January</div>
          </div>
          </div>

          <div class="sched-right2">
            <h3 class="type2">Distribution</h3>
            <h3 class="subject2">Mathematics</h3>
            <h3 class="modulenum2">12345</h3>
          
          <div class="time2">
            <img src="images/time.png" alt="" />
          </div>
          </div>
          </div>
        </div>
--->
      </div>
    </div>
    <script src="css/script.js"></script>
  </body>
  <!--<footer>FOOTER</footer>-->
</html>