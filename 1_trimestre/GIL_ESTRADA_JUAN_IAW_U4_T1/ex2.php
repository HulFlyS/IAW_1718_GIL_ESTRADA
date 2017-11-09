<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido Variable</title>
</head>
<body>
<?php
  $nombre='Harry';
  $edad=28;
  var_dump ($nombre);
  echo "<br/>";
  print_r ($nombre);
  echo "<br/>";
  var_dump ($edad);
  echo "<br/>";
  $nombre=null;
  var_dump ($nombre);
  ?>
</body>
</html>
