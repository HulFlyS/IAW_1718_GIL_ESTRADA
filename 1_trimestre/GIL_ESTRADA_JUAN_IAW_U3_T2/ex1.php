<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays I</title>
</head>
<body>
<?php
  $array = array("A", "B", "C", "D");
  $longitud = count($array);
  for($i=sizeof($array)-1;$i>=0;$i--) {
    echo "<li>";
    echo $array[$i];
    echo "<br>";
    echo "</li>";
  }
?>
</body>
</html>
