<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'undo179',
  'asteroid');

    session_start();
    if($_SESSION['user']){
    }
    else {
      header("location:index.php");
    }

    if($_SERVER['REQUEST_METHOD'] = "POST")
    {
      $id = mysqli_real_escape_string($conn, $_POST['id']);
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $description = mysqli_real_escape_string($conn, $_POST['description']);

      mysqli_connect("localhost", "root", "undo179") or die(mysqli_error());
      mysqli_select_db($conn, "asteroid") or die("Cannot connect to database");

      mysqli_query($conn, "
        UPDATE forum
          SET
            title = '$title',
            description = '$description'
          WHERE
            id = '$id'
          ");

    }
    else {
      header("location:home.php");
    }

?>
<meta http-equiv="refresh" content="0;url=posts_detail.php?id=<?=$id?>">
