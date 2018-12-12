<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'undo179',
  'asteroid');

    /*
    session_start();
    if($_SESSION['user']){
    }
    else {
      header("location:index.php");
    }

    if($_SERVER['REQUEST_METHOD'] = "POST")
    {
      $id = mysqli_real_escape_string($conn, $_POST['id']);

      mysqli_connect("localhost", "root", "undo179") or die(mysqli_error($conn));
      mysqli_select_db($conn, "asteroid") or die("Cannot connect to database");

      mysqli_query($conn, "
        DELETE
          FROM forum
          WHERE id = '$id'
          ");
      header("location:posts.php");
    }
    else {
      header("location:home.php");
    }

    settype($_POST['id'], 'integer');
    $filtered = array(
      'id'=>mysqli_real_escape_string($conn, $_POST['id'])
    );
     $sql = "
      DELETE
        FROM forum
        WHERE id = {$filtered['id']}
    ";
    $result = mysqli_query($conn, $sql);
    if($result === false){
      echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
      error_log(mysqli_error($conn));
    } else {
      echo '삭제에 성공했습니다. <a href="posts.php">돌아가기</a>';
    }
    */
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // sql to delete a record
    $sql = "DELETE FROM forum WHERE id=6";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";

    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
?>
