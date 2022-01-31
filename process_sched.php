<?php
include("db_connect.php");
    session_start();
    $studentlist = $_POST['studentlist'];
    $schedtype = $_POST['schedtype'];
    $FromTime = $_POST['FromTime'];
    $ToTIme = $_POST['ToTime'];
    $sDate = $_POST['sDate'];
    $subj = $_POST['subj'];
    $modno = $_POST['modno'];
    if(isset($_POST['savedata']))
{
        
        foreach($studentlist as $namelist)
        {
        
           // echo $namelist."<br>";
            $qry = "INSERT INTO schedule (student_name, schedtype, date, ftime, ttime, subject_name, module_no, status) VALUES ('$namelist','$schedtype','$sDate','$FromTime','$ToTIme','$subj','$modno','Due')";
            $qry_run = mysqli_query($con, $qry);
        }
    if($qry_run)
        {
        header("Location: assignmod.php");
        }
    }
    else
    {
        header("Location: sched.php");

    }




?>