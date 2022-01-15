#!C:\python
print("Content-Type: text/html")
print()
import cgi
form = cgi.FieldStorage()
pageId = form["id"].value
print('''<!doctype html>
<html>
<head>
  <title>WEB1 - Welcome</title>
  <meta charset="utf-8">
</head>

<body>
  <h1><a href="index.py">WEB</a></h1>
  <ol>
    <li><a href="index.py?id=HTML">HTML</a></li>
    <li><a href="index.py?id=CSS">CSS</a></li>
    <li><a href="index.py?id=JavaScript">JavaScript</a></li>
  </ol>
  <h2>{title}</h2>
  <p>Doo doo, doo doo, doo doo
  Doo doo, doo doo, doo doo, doo doo
  Doo doo, doo doo, doo doo doo
  Memories bring back, memories bring back you</p>
</body>
</html>
'''.format(title=pageId))
