<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'opentutorials');
$sql = "
  inser into topic
    (title, description, created)
    value(
      'MySQL',
      'MySQL is ...',
      NOW()
      )";
$result = mysqli_query($conn, $sql);
if ($result === false) {
  echo mysqli_error($conn);
}
 ?>
