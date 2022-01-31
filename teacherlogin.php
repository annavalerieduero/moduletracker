<?php
include("config.php");
// initializing variables
$teacher_email  = "";
$errors = array(); 

if (isset($_POST['submit'])) {
  $teacher_email = mysqli_real_escape_string($dbconnect, $_POST['teacher_email']);
  $teacher_password = mysqli_real_escape_string($dbconnect, $_POST['teacher_password']);

  if (empty($teacher_email)) {
    array_push($errors, "Email is required");
  }
  if (empty($teacher_password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM teacher WHERE teacher_email='$teacher_email' AND teacher_password='$teacher_password'";
    $results = mysqli_query($dbconnect, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['teacher_email'] = $teacher_email;
      header('location: teacherprofile.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>