<!DOCTYPE html>
<html>
  <head>
  <title>Cat-Asteroid2</title>
  </head>
  <body>
    <?php
    include"header.php";
    include"sidebar.php";
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
                print '<td align="center">'. "<a href=\"posts_detail.php?id={$row['id']}\">{$row['title']}</a>" . "</td>";
                print '<td align="center">'. $row['date'] . "</td>";
            print "</tr>";
          }
          /*
          $sql = "SELECT * FROM forum WHERE id={$_GET['id']}";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result);
          $article = array(
            'title'=>$row['title'],
            'description'=>$row['description']
          );
          */

         ?>
      </table>
  </body>
</html>
