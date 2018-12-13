<!DOCTYPE html>
<html>
  <head>
    <title>Cat-Asteroid2</title>
  </head>
  <body>
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
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>

    <a href="update.php?id=<?=$_GET['id']?>">update</a>

    <form action="process_delete.php" method="post">
      <input type="hidden" name="id" value="'.$_GET['id'].'">
      <input type="submit" value="delete">
    </form>



  </body>
</html>
