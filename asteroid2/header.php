<!DOCTYPE html>
<html>
  <head>
  <title>Cat-Asteroid2</title>
  </head>
  <?php
  session_start();
  $user = $_SESSION['user'];
  if(isset($_SESSION['user'])){
    Print '<a href="logout.php">Logout</a>';
  }
  else{
    Print '<a href="login.php">Login</a></br>';
    Print '<a href="register.php">Register</a>';
  }
  ?>
