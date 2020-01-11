<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $arr = array();
      $arr[1] = 1;
      $arr[2] = 2;

      $n = $_GET['number'];
      for ($i=3; $i <= $n; $i++) {
        $arr[$i] = ($arr[$i - 1] + $arr[$i - 2]) % 10007;

      }
      echo $arr[$n];
      //print_r($arr);
    ?>
  </body>
</html>
