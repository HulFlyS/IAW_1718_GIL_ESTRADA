<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays III</title>
</head>
<body>
<?php
  $array1=[["A" =>1,"B"=>2,"C"=>3],["D"=>4,"E"=>5,"F"=>6],
     ["G"=>7,"H"=>8,"I"=>9]];
  echo "<table style=\"border:1px solid black\">";
  for ($i=0;$i<sizeof($array1);$i++) {
    echo "<tr>";
    foreach ($array1[$i] as $letra => $valor) {
        echo "<td width='40' height='40' align='center'>$letra:$valor</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
</body>
</html>
