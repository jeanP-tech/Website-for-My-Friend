<!DOCTYPE html>
<html>
  <head>
    <title>Cat-Asteroid2</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include"../header.php";
    include"../sidebar.php";
    ?>

      <h2 align="center">Posts</h2>
      <table class="table table-hover">
        <thead>
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">date</th>

          </tr>
      </thead>
      <tbody>
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
                print '<th scope="row" align="center">'. $row['id'] . "</td>";
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
       </tbody>
      </table>
      <hr/>
      <a href="write.php" role="button" class="btn btn-outline-secondary float-right">write</a>
      <div class="text-center">
        <ul class="pagination">
          <li class="page-item">
           <a class="page-link" href="#" aria-label="Previous">
             <span aria-hidden="true">&laquo;</span>
             <span class="sr-only">Previous</span>
           </a>
         </li>
          <li class="page-item"><a class="page-link" href="posts.php">1</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </div>
  </body>
</html>
