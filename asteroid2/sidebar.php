<!DOCTYPE html>
<html>
  <head>
  <title>Cat-Asteroid2</title>
  <link rel=stylesheet href='styles.css' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">Home</a>
      <a href="me.php">Me</a>
      <a href="posts.php">Posts</a>
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
