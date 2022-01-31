<?php
include("teacherlogin.php");
include("errors.php");
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="icon" href="image/tab-logo.png">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title"><img src="image/tab-logo.png" alt="moduletracker" style="width:190px;height:190px;margin-top: -10%; border-radius: 15px;"></div>

      <form action="teacherprofile.php" method="post">
        <div class="field">
          <input type="text" name="teacher_email" required>
          <label>Email</label>
        </div>
        <div class="field">
          <input type="password" name="teacher_password" required>
          <label>Password</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="field">
          <input type="submit" value="Login" name="submit">
        </div>
        <div class="signup-link">Not a member? <a href="register.php">Register</a></div>
      </form>
    </div>

  </body>
</html>
