<?php
$trabajador1 = array();
$trabajador2 = array();
$trabajador3 = array();

$claves = array('nombre', 'apellido', 'cedula', 'sueldo', 'departamento', 'lugar');

foreach($claves as $key => $valor){
  $trabajador1[$valor] = $_POST[$valor . "1"];
  $trabajador2[$valor] = $_POST[$valor . "2"];
  $trabajador3[$valor] = $_POST[$valor . "3"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1" align="center">
    <tr>
<td>
  <h3>trabajador 1</h3>
  <?php
  foreach($trabajador1 as $clave => $valor){
    echo $clave . " es " . $valor;
    echo "<br>";
  }
  ?>
</td>
<td>
  <h3>trabajador 2</h3>
  <?php
  foreach($trabajador2 as $clave => $valor){
    echo $clave . " es " . $valor;
    echo "<br>";
  }
  ?>
</td>
<td>
  <h3>trabajador 3</h3>
  <?php
  foreach($trabajador3 as $clave => $valor){
    echo $clave . " es " . $valor;
    echo "<br>";
  }
    ?>
</td>  
    </tr>
  </table>
</body>
</html>
