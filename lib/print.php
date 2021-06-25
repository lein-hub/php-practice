<?php
function print_title() {
  if (isset($_GET['id']))
    echo htmlspecialchars($_GET['id']);
  else
    echo "Welcome";
}

function print_description() {
  if (isset($_GET['id'])) {
    $filename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$filename));
  } else {
    echo "Hello, PHP";
  }
}

function print_list() {
  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    $title = htmlspecialchars($list[$i]);
    if ($list[$i] != "." && $list[$i] != "..") {
      echo "<li><a href=\"index2.php?id=$title\">$title</a></li>\n";
    }
    $i = $i + 1;
  }
}
 ?>