<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
      $name = array("nurung", "hello", "hungry");
      echo $name[1].'<br>';
      echo $name[0].'<br>';
      echo count($name)."<br>";
      array_push($name, "ramen");
      print_r($name);
      echo "<br>";
      array_pop($name);
      print_r($name);
    ?>
  </body>
</html>
