<!DOCTYPE html>
<html>
  <head>
  <title>Cat-Asteroid2</title>
  </head>
  <body>
      <form action="register.php" method="POST">
        Enter Username: <input type="text" name="username" required="required"/> <br/>
        Enter password: <input type="password" name="password" required="required"/> <br/>
        <input type="submit" value="Register"/>
      </form>
  </body>
</html>

<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'undo179',
  'asteroid');

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $bool = true;

  mysqli_connect("localhost", "root", "undo179") or die(mysqli_error());
  mysqli_select_db($conn, "asteroid") or die("Cannot connect to database");
  $query = mysqli_query($conn, "Select * from users");
  while($row = mysqli_fetch_array($query))
  {
    $table_users = $row['username'];
    if($username == $table_users)
    {
      $bool = false;
      print '<script>alert("Username has been taken!");</scripts>';
      print '<script>window.location.assign("home.php");</script>';
    }
  }
  if($bool)
  {
    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
    print '<script>alert("Successfully Registered!");</script>';
    print '<script>window.location.assign("register.php");</script>';
  }
}
?>
