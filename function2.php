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
        // email('egoing@egoing.net', sum2(2,5));
        // upload('egoing.net', sum2(2,4));
        file_put_contents('result.txt', $result);
       ?>
  </body>
</html>
