<?php
include_once 'config.php';

if (isset($_POST['save'])) {
mysqli_query($dbconnect,"UPDATE student set student_contno='" . $_POST['student_contno'] . "', student_add='" . $_POST['student_add'] . "'");
echo '<script>alert("Record Modified Successfully")</script>';
}
$result = mysqli_query($dbconnect,"SELECT student_id FROM student");
$rows= mysqli_fetch_array($result);
?>