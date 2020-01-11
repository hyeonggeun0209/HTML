<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      file_put_contents("data/".$_POST['title'], $_POST['description']);
    ?>
  </body>
</html>
