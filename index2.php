<?php
function print_title() {
  if (isset($_GET['id']))
    echo $_GET['id'];
  else
    echo "Welcome";
}

function print_description() {
  if (isset($_GET['id'])) {
    $filename = $_GET['id'];
    echo file_get_contents("data/".$filename);
  } else {
    echo "Hello, PHP";
  }
}

function print_list() {
  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    if ($list[$i] != "." && $list[$i] != "..") {
      echo "<li><a href=\"index2.php?id=$list[$i]\">$list[$i]</a></li>\n";
    }
    $i = $i + 1;
  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();
       ?>
    </title>
  </head>
  <body>
    <h1><a href="index2.php">WEB</a></h1>
    <ol>
      <?php
        print_list();
       ?>
    </ol>
    <h2>
      <?php
        print_title();
       ?>
    </h2>
    <?php
      print_description();
     ?>
</html>
