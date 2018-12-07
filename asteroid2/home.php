<!DOCTYPE html>
<html>
  <head>
  <title>Cat-Asteroid2</title>

  </head>
  <?php
  session_start();
  if($_SESSION['user']){
    echo "hello";
  }
  else{
    
  }
  $user = $_SESSION['user'];
  ?>
  <body>
    <p>Hello <?php Print "$user"?>!</p>
      <ul id="menu">
        <li><a href="logout.php">Logout</a></li>
      </ul>

      <ul id="sidebar">
        <li><a href="me.php">Me</a></li>
        <li><a href="posts.php">Posts</a></li>
        <li><a href="images.php">Images</a></li>
      </ul>


  </body>
</html>
