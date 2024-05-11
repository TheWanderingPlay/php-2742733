<?php
echo "<h2>Ejercicio</h2>";
$nombre1 = "Pedro";
$nombre2 = "Ana";
$saludo = "hola";
echo "$saludo $nombre1 y $nombre2 ¿como están?";
echo "<br> <br>";

echo "<h2>Ejercicio: truco de magia matemática </h2>";
$mi_numero = 9;
$respuesta = $mi_numero;
$respuesta += "2";
$respuesta *= "2";
$respuesta -= "2";
$respuesta /= "2";
$mi_numero -= $respuesta;
echo "$mi_numero";
?>