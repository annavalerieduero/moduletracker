<?php
  include("db_connect.php");
  
  session_start();


?>
<html><head>
    <meta charset = "utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="assignmod_css.css">
    </head>
    <body>

    
    <form action="adds_process.php" method="POST">
    <h1>Add Student</h1>

<table class="content-table">
    
  <thead>
      
    <tr>
      <th>Fill in the details needed</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
        <td>Student ID:</td>
        <td><input type="text" name="studentID"><br></td>
    </tr>
    <tr>
        <td>Student Name:</td>
        <td><input type="text" name="studentNM"><br></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><input type="text" name="gender"><br></td>
    </tr>
    <tr>
        <td>Birthdate:</td>
        <td><input type="date" name="bday"><br></td>
    </tr>
    <tr>
        <td>School:</td>
        <td><input type="text" name="schoolNM"><br></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="semail"><br></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="text" name="spassword"><br></td>
    </tr>
    <tr>
        <td>Contact No:</td>
        <td><input type="text" name="contno"><br></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><input type="text" name="sadd"><br></td>
    </tr>
    <tr>
        <td>Grade:</td>
        <td><input type="text" name="grade"><br></td>
    </tr>
    <tr>
        <td>Section:</td>
        <td><input type="text" name="ssection"><br></td>
    </tr>
            
    
  </tbody>
</table>
<br>
<td><button name="btn-bck"class="back"><a href="viewslist.php">Back</a></button>
    <button name="newstudent">Add Student</button></td>
</form>
    </body>



</html>