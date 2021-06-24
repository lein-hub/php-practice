<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index2.php">WEB</a></h1>
    <ol>
      <li><a href="index2.php?id=HTML">HTML</a></li>
      <li><a href="index2.php?id=CSS">CSS</a></li>
      <li><a href="index2.php?id=JavaScript">JavaScript</a></li>
      <li><a href="index2.php?id=PHP">PHP</a></li>
    </ol>
    <h2>
      <?php
        if (isset($_GET['id']))
          echo $_GET['id'];
        else
          echo "Welcome";
       ?>
    </h2>
    <?php
      if (isset($_GET['id'])) {
        $filename = $_GET['id'];
        echo file_get_contents("data/".$filename);
      } else {
        echo "Hello, PHP";
      }
     ?>
</html>
