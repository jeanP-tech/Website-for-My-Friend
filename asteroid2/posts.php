<!DOCTYPE html>
<html>
  <head>
  <title>Cat-Asteroid2</title>
  </head>
  <body>
    <?php
    include"header.php"
    ?>

      <input type="button" value="write" onclick="window.location.href='write.php'" />
      <h2 align="center">My list</h2>
      <table border="1px" width="80%">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>date</th>

        </tr>
        <?php
          $conn = mysqli_connect(
            "localhost",
            "root",
            "undo179",
            "asteroid"
          );
          mysqli_connect("localhost", "root", "undo179") or die(mysqli_error());
          mysqli_select_db($conn, "asteroid") or die("Cannot connect to database");
          $query = mysqli_query($conn, "Select * from forum");
          while($row = mysqli_fetch_array($query))
          {
            print "<tr>";
                print '<td align="center">'. $row['id'] . "</td>";
                print '<td align="center">'. $row['title'] . "</td>";
                print '<td align="center">'. $row['date'] . "</td>";

            print "</tr>";
          }
         ?>
      </table>
  </body>
</html>
