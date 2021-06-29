<?php
$conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
$sql = "select * from topic";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
print_r($row[1]);
echo $row['description'];

 ?>
