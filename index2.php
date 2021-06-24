<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>WEB</h1>
    <ol>
      <li><a href="index2.php?id=HTML">HTML</a></li>
      <li><a href="index2.php?id=CSS">CSS</a></li>
      <li><a href="index2.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
      <?php
        echo $_GET['id'];
       ?>
    </h2>
    <?php
    $filename = $_GET['id'];
    echo file_get_contents("data/".$filename);
     ?>
</html>
