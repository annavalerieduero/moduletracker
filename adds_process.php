<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $con = mysqli_connect("localhost", "root", "", "moduletracker");
          
        // Check connection
        if($con === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
$studentID = $_REQUEST['studentID'];
$studentNM = $_REQUEST['studentNM'];
$gender = $_REQUEST['gender'];
$bday = $_REQUEST['bday'];
$schoolNM = $_REQUEST['schoolNM'];
$semail = $_REQUEST['semail'];
$spassword = $_REQUEST['spassword'];
$contno = $_REQUEST['contno'];
$sadd = $_REQUEST['sadd'];
$grade = $_REQUEST['grade'];
$ssection = $_REQUEST['ssection'];
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO student(student_id, student_name,student_gender,birthdate,school_name,student_email,student_pass,student_contno,student_add,ad_grade,ad_section) 
        VALUES('$studentID','$studentNM','$gender','$bday','$schoolNM','$semail','$spassword','$contno','$sadd','$grade','$ssection')";
          
        if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
                header("Location: viewslist.php");
                
  
           
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>
    </center>
</body>
  
</html>