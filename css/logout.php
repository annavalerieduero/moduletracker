<?php
session_start();
session_destroy();
unset($_SESSION['student_email']);
header('location:index.php');
exit();
?>

<?php
session_start();
session_destroy();
unset($_SESSION['teacher_email']);
header('location:index.php');
exit();
?>