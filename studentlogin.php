<?php
include("config.php");
// initializing variables
$student_email  = "";
$errors = array(); 

if (isset($_POST['submit'])) {
  $student_email = mysqli_real_escape_string($dbconnect, $_POST['student_email']);
  $student_password = mysqli_real_escape_string($dbconnect, $_POST['student_password']);

  if (empty($student_email)) {
    array_push($errors, "Email is required");
  }
  if (empty($student_password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM student WHERE student_email='$student_email' AND student_password='$student_password'";
    $results = mysqli_query($dbconnect, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['student_email'] = $student_email;
      header('location: studentprofile.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>