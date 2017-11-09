<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>
<body>
<?php
  echo "<p>\n";
  $mostrar = 1;
  while ($mostrar  < 10){
    echo 'abc ';
    $mostrar ++;
  }
  echo "</p>\n";
  echo "<p>\n";
  $mostrar  = 1;
  do{
    echo 'xyz ';
    $mostrar ++;
  } while ($mostrar  < 10) ;
  echo "</p>\n";
  for ($x=1; $x<10; $x++){
    echo "$x ";
  }
  echo "\n<ol>";
  for ($x='A'; $x<'G'; $x++){
    echo "<li>Item $x</li>\n";
  }
  echo "\n</ol>";
?>
</body>
</html>
