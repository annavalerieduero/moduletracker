<?php
include_once 'config.php';

if (isset($_POST['save2'])) {
mysqli_query($dbconnect,"UPDATE teacher set teacher_name='" . $_POST['teacher_name'] . "', teacher_contno='" . $_POST['teacher_contno'] . "', teacher_address='" . $_POST['teacher_address'] . "'");
echo '<script>alert("Record Modified Successfully")</script>';
}
$result = mysqli_query($dbconnect,"SELECT teacher_id FROM teacher");
$rows= mysqli_fetch_array($result);
?>