<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaracion</title>
</head>
<body>
<?php
  $mes=date ("m");
  if ($mes == "8"){
    echo "<p>Es Agosto, así que hace mucho calor</p>";
  }else{
    echo "<p>No es Agosto, al menos no hace tanta calor.</p>";
  }
?>
</body>
</html>
