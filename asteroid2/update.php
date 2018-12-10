<?php
include"header.php";
$conn = mysqli_connect(
  "localhost",
  "root",
  "undo179",
  "asteroid");

$sql = "SELECT * FROM forum WHERE id={$_GET['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$article = array(
  'title'=>$row['title'],
  'description'=>$row['description']
);
 ?>


<!DOCTYPE html>
<html>
  <head>
  <title>Cat-Asteroid2</title>
  </head>
  <body>
      <form action="process_update.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        title: <input type="varchar" name="title" value="<?=$article['title']?>"/><br/>
        description: <input type="text" name="description" value="<?=$article['title']?>"/><br/>
        <input type="submit" value="Post"/>
      </form>
  </body>
</html>
