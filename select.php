<?php
$conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
// 1 row
$sql = "SELECT * FROM topic WHERE id = 3";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];

// all rows
$sql = "SELECT * FROM topic";
$res = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($res)) {
  echo '<h1>'.$row['title'].'</h1>';
  echo $row['description'];
}


 ?>
