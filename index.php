<?php
echo "My first PHP script!";
echo "<br>";
echo"Mis Datos";
$nombre="Jorge Miguel Cayetano García";
$edad=19;
$estatura=1.60;
echo "Soy...". strtoupper($nombre) . "tengo" . $edad . "años y mido" . $estatura. "metros";
echo "<br>";
var_dump(is_int ($nombre));
echo "<br>";
$x=34;
$y=356.78;
$z=$x+$y;
$w=$x-$y;
$t=$x*$y;
$r=$x/$y;
echo "La suma es $x + $y=$z<br>";
echo "La resta es $x - $y=$w<br>";
echo "La multiplicación es $x * $y=$t<br>";
echo "La división es $x / $y=$r<br>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas PHP</title>
</head>
<body>
    Hola!!
    
</body>
</html>