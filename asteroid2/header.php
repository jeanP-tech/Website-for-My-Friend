<!DOCTYPE html>
<html>
  <head>
    <title>Cat-Asteroid2</title>
    <link rel=stylesheet href='styles.css' type='text/css'>
  </head>
  <?php
  session_start();
  $user = $_SESSION['user'];
  if(isset($_SESSION['user'])){
    Print
      '
      <ul id="header">
        <li><a href="logout.php">Logout</a></li>
      </ul>
      ';
  }
  else{
    Print
      '
      <ul id="header">
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
      ';
  }
  ?>
</html>
