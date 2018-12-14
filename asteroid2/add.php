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
      header("location:../index.php");
    }

    if($_SERVER['REQUEST_METHOD'] = "POST")
    {
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $description = mysqli_real_escape_string($conn, $_POST['description']);

      mysqli_connect("localhost", "root", "undo179") or die(mysqli_error());
      mysqli_select_db($conn, "asteroid") or die("Cannot connect to database");

      mysqli_query($conn, "INSERT INTO forum (title, description, date) VALUES ('$title', '$description', now())");
      header("location: posts.php");
    }
    else {
      header("location:../home.php");
    }

?>
