<?php
	 

$host= "localhost";
$usern = "root";
$password = "";
$db = "moduletracker";
$con = mysqli_connect($host, $usern, $password, $db);

if ($con->connect_error) {
    die('Connect Error (' . 
    $con->connect_errno . ') '. 
    $con->connect_error);
}
?>