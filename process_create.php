<?php
// var_dump($_POST);

$conn = mysqli_connect('localhost', 'root', '', 'opentutorials');
$filtered = array(
  'title'=>mysqli_real_escape_string($conn, $_POST['title']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description'])
);
$sql = "
  insert into topic
   (title, description, created)
   values (
     '{$filtered['title']}',
     '{$filtered['description']}',
     now()
     )
";

$res = mysqli_query($conn, $sql);
if ($res === false) {
  echo '저장하는 과정에서 오류가 발생했습니다. 관리자에게 문의하십시오. <br>';
  error_log(mysqli_error($conn));
} else {
  echo '저장되었습니다. <a href="index.php">돌아가기</a>';
}
 ?>
