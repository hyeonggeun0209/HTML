<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>String & String Operator</h1>
    <?php
      echo "Hello \"w\"orld!";
    ?>
    <h2>concatenation operator</h2>
    <?php
      echo "Hello"." "."world";
    ?>
    <h2>String length function</h2>
    <?php
      $str = "Hello world";
      $str1 = "ho";
      echo strlen($str);
      echo $str.$str1;
    ?>
  </body>
</html>
