<!DOCTYPE html>
<html>
  <head>
  <title>Cat-Asteroid</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel=stylesheet href='styles.css' type='text/css'>
  </head>
  <body>
    <div class="navbar">
      <ul id="menu">
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </div>
    <div id="main_cat">
      <img src="rainbow_circle.png">
    </div>

    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Me</a>
      <a href="#">Posts</a>
      <a href="#">Images</a>
      <a href="#">etc</a>
    </div>

    <div id="main">
      <button class="openbtn" onclick="openNav()">&#9776;</button>

    </div>
    <script>
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>

  </body>
</html>
