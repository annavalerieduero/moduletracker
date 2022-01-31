<?php
  include("db_connect.php");
  
  session_start();
?>

<html>
<head>
<link rel="stylesheet" href="sched2.css">
    </head>
    <title>Schedule</title>
  <body>
      <h2><a href = "calendar.php"><-Back</a></h2>
      <h1>Add Schedule</h1>
      <form action="process_sched.php" method="post" class="center">
      
    <div class="center">
      <p>Schedule Type</p>
        <div class="controls">
          <label class="radio">
            <input type="radio" class="sd" name="schedtype" value="Distribution">
            Distribution
          </label>
          <label class="radio">
            <input type="radio" class="sd" name="schedtype" value="Retrieval">Retrieval
          </label>
          </div>
          <hr>
          <label for="scheddate" class="sd"><p>Date</p></>
             <input type="date" name="sDate" class="schedDT">
          </label>
          <label for="scheddate" class="sd"><p>Time <br><br>From</p>
             <input type="time" name="FromTime" class="schedDT"><p><br><br>To</p>
             <input type="time" name="ToTime" class="schedDT">
          </label>
         
          <button name="savedata" class="submit_btn" >SUBMIT</button>

</div>

        <div class="secdiv">
        <form action=""class="checklist">
        <br>
    
        <?php

        $studentlist = "SELECT * FROM student";
        $run_list = mysqli_query($con, $studentlist);

            if(mysqli_num_rows($run_list)>0){

              foreach($run_list as $slist){
              ?>
                 <h3>Student Name</h3><br>
                 <h3><input type="checkbox" id="slname"class="s_cl" name="studentlist[]" value="<?=$slist['student_name'];?>"><?=$slist['student_name'];?></h3>
                 <br>
                 <h3>Student ID:</h3>
                 <h3 id="sid" name="idlist[]" value="<?=$slist['student_id'];?>"><?php echo $slist['student_id'];?></h3>
                 <h3>Grade Level:</h3>
                 <h3 name="grdlist[]" ><?php echo $slist['ad_grade'];?></h3>
                 <h3>Grade Section:</h3>
                 <h3 name="seclist[]" ><?php echo $slist['ad_section'];?></h3>
                 <br><br>
              
              <?php
               }

            }else{
          echo "No Records Found in the Database";
            }


              ?>
              </div>
        <div class="modset">
        <h3>Assign Module</h3><br>
        <h3>Subject Name:</h3>
        <input type="text" name="subj"><br>
        <h3>Module No.:</h3>
        <input type="text" name="modno"><br><br>




        
        

        </form>
        </div>
        
        
 
          </form>
  </body>
        
</html>