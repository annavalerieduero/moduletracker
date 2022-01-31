<?php
session_start();
$dbconnect = mysqli_connect("localhost", "root", "", "moduletracker");
          
        // Check connection
        if($dbconnect === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
?>