<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>test1</h1>
    <?php
      $arr = array();
      fscanf(STDIN, "%d\n", $n);

      $arr[0] = 0;
      $arr[1] = 1;
      $arr[2] = 2;

      for ($i=3; $i <= $n; $i++) {
        $arr[$i] = ($arr[$i - 1] + $arr[$i - 2]) % 10007;

      }
      echo $arr[$n];
    ?>

  </body>

</html>
