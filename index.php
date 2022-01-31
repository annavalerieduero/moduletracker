<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Module Tracker</title>
    <link rel="icon" href="image/tab-logo.png">
    <link rel="stylesheet" href="css/index-style.css">
  </head>

  <body>
    <div class="logo">
      <img src="image/logo.png" alt="moduletracker" style="width:250px;height:250px;">
    </div>
    <div class="box">
      <form action="login-for-student.php" method="post">
          <div class="field">
            <input type="submit" value="Login as Student">
            <img src="image/students.png" alt="student" style="width:150px;height:150px;margin-bottom: -7%;">
          </div>
      </form>
      <form action="login-for-teacher.php" method="post">
        <div class="field">
            <img src="image/teacher.png" alt="teacher" style="width:150px;height:150px;margin-bottom: -7%;">
            <input type="submit" value="Login as Teacher">
          </div>
      </form>
    </div>
  </body>
</html>