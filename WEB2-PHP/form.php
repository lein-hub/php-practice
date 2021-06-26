<?php
echo "<p>title: ".$title = $_POST['title']."</p>";
echo "<p>description: ".$description = $_POST['description']."</p>";
file_put_contents('./data/'.$title, $description);
 ?>
