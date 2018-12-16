<!DOCTYPE html>
<html>
  <head>
    <title>Cat-Asteroid2</title>
    <link rel=stylesheet href='styles.css' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body class="text-center" id="register_body">
    <form class="form-signin" action="register.php" method="POST">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">ID</label>
      <input name="username" type="text" id="inputEmail" class="form-control" placeholder="ID" required autofocus>
      <label for="inputword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <button id="sign_button" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
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
