<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic() {
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
      }
      basic();
     ?>

     <h2>parameter &amp; argument</h2>
     <?php
      function sum($left, $right) {
        print($left+$right);
        print("<br>");
      }
      sum(2,4);
      ?>

      <h2>return</h2>
      <?php
        function sum2($left, $right) {
          return $left + $right;
        }

        $result = sum2(5,5);
        print($result);
        file_put_contents('result.txt', $result); // 'result.txt' 라는 파일을 만들고 그 내용으로 $result를 입력한다.
       ?>
  </body>
</html>
