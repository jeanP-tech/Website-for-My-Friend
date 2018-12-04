<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'undo179',
  'asteroid');

    session_start();
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    mysqli_connect("localhost", "root", "undo179") or die(mysqli_error());
    mysqli_select_db($conn, "asteroid") or die("Cannot connect to database");
    $query = mysqli_query($conn, "SELECT * from users WHERE username = '$username'");
    $exists = mysqli_num_rows($query);
    $table_users = "";
    $table_password = "";
    if($exists > 0)
    {
      while($row = mysqli_fetch_array($query))
      {
        $table_users = $row['username'];
        $table_password = $row['password'];
      }
      if(($username == $table_users) && ($password == $table_password))
      {
          if($password == $table_password)
          {
              $_SESSION['users'] = $username;
              header("location:home.php");
          }
      }
      else {
        print '<script>alert("Incorrect Password!");</script>';
        print '<script>window.location.assign("login.php");</script>';
      }
    }
    else {
      print '<script>alert("Incorrect Username!");</script>';
      print '<script>window.location.assign("login.php");</script>';
    }
 ?>
