<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="form.php" method="post">
      <p><input type="text" name="title" placeholder="Title"></p>
      <textarea name="description" rows="8" cols="80"></textarea>
      <input type="submit">
      <textarea cols="50" rows="8"><c:out value="${content}" /></textarea>

    </form>
  </body>
</html>
