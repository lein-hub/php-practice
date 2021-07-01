<?php
$conn = mysqli_connect('localhost', 'root', '', 'opentutorials');

$sql = "SELECT * FROM topic";
$res = mysqli_query($conn, $sql);

$list = '';
while ($row = mysqli_fetch_array($res)) {
  $escaped_title = htmlspecialchars($row['title']);
  $list = $list."<li><a href=/index.php?id={$row['id']}>{$escaped_title}</a></li>";
}

if (isset($_GET['id'])) {
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM topic where id={$filtered_id}";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($res);
  $article = array(
    'title'=>htmlspecialchars($row['title']),
    'description'=>htmlspecialchars($row['description'])
  );
} else {
  $article = array(
    'title'=>'Welcome',
    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
  );
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="/">WEB</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <a href="./create.php">create</a>
    <h2><?=$article['title']?></h2>
    <p>
      <?=$article['description']?>
    </p>
  </body>
</html>
