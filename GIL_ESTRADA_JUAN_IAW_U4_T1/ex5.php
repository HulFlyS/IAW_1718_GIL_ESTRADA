<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles II</title>
    <style>
       .par {
         background-color: grey;
       }
       .impar {
         background-color: red;
       }
       td {
         width: 50px;
         height: 50px;
       }
     </style>
</head>
<body>
  <?php
    echo "<table>";
    for ($i=0;$i<5;$i++) {
      if (($i%2)==0) {
        echo "<tr class='par'>";
      } else {
        echo "<tr class='impar'>";
      }
      for ($j=0; $j<5;$j++) {
        echo "<td></td>";
      }
      echo "</tr>";
        }
      echo "</table>";
  ?>
</body>
</html>
